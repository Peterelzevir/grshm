<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Drivers\DriverManager;
use App\Conversations\SignatureConversation;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\Log;
use App\Http\Middleware\BusinessConnectionMiddleware;

$botman = resolve('botman');

DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

$botman->middleware->received(new BusinessConnectionMiddleware());

$botman->hears('(.+)', function (BotMan $bot) {
    try {
        $userMessage = $bot->getMessage();
        $extras = $userMessage->getExtras();
        $payload = $userMessage->getPayload();

        Log::info($payload);

        if (isset($payload['business_connection'])) {
            $businessConnection = $payload['business_connection'];

            if ($businessConnection['status'] === 'connected') {
                Log::info('Business connection active.');
            } elseif ($businessConnection['status'] === 'disconnected') {
                Log::info('Business connection inactive.');
            }

            if (isset($businessConnection['can_reply']) && !$businessConnection['can_reply']) {
                Log::warning('Bot cannot reply to the user.');
            }
        }

        $platform_driver = $bot->getDriver()->getName();
        $low_platform_driver = strtolower($platform_driver);
        $platform_id = $bot->getUser()->getId();
        $message = '';

        if ($low_platform_driver == 'telegram') {
            $incoming_message = $bot->getMessage()->getPayload();
            $incoming_message_array = (is_array($incoming_message)) ? $incoming_message : $incoming_message->toArray();

            if ($incoming_message_array) {
                if (array_key_exists('data', $incoming_message_array)) {
                    // Callback data dari tombol
                    $callbackData = $incoming_message_array['data'];

                    // Tangani callback
                    $bot->reply("Anda memilih: $callbackData");
                    return;
                }

                if (array_key_exists('text', $incoming_message_array)) {
                    $message = $incoming_message_array['text'];
                }
            }
        }

        // Lanjutkan logika lainnya jika tidak ada callback data
        $query = [];
        $first = explode(' ', $message);

        if (0 === strpos($message, '/')) {
            $field = 'command_string';
            foreach ($first as $index => $value) {
                if ($index > 0) {
                    $query[] = $value;
                }
            }
        } else {
            $field = 'name';
        }

        $menus = new stdClass();
        if (0 === strpos($message, '/exness')) {
            $menus->controller = 'App\\Http\\Controllers\\ExnessCheckAccountBotController';
        } else if (0 === strpos($message, '/xm')) {
            $menus->controller = 'App\\Http\\Controllers\\XMCheckAccountBotController';
        } else if (0 === strpos($message, '/bantuanliveagent')) {
            $menus->controller = 'App\\Http\\Controllers\\HelpAgentController';
        } else {
            $menus->controller = null;
        }

        if ($field == 'command_string' && $menus->controller !== null) {
            $object = new $menus->controller();
            $object->platform_driver = $platform_driver;
            $reply = $object->run($platform_id, $query);
            if ($reply instanceof Conversation) {
                $bot->startConversation($reply);
            } else {
                $bot->reply($reply);
            }
        } else {
            $help_desk_conversation = new SignatureConversation();
            $help_desk_conversation->message = $message;
            $help_desk_conversation->payload = $payload;
            $bot->startConversation($help_desk_conversation);
        }

        return;
    } catch (\Throwable $th) {
        $bot->reply($th->getMessage());
    }
});


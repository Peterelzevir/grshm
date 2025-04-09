<?php

namespace App\Http\Middleware;

use BotMan\BotMan\Interfaces\Middleware\Received;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;
use Illuminate\Support\Facades\Log;

class BusinessConnectionMiddleware implements Received
{
    public function received(IncomingMessage $message, $next, BotMan $bot)
    {
        $payload = $message->getPayload();

        // Tambahkan simulasi data business_connection
        $payload['business_connection'] = [
            'status' => 'connected',
            'can_reply' => true,
        ];

        // Log payload untuk debugging
        Log::info('Updated payload with business_connection:', ['payload' => $payload]);

        if (isset($payload['business_connection'])) {
            $businessConnection = $payload['business_connection'];

            // Logika untuk menangani business_connection
            if ($businessConnection['status'] === 'connected') {
                Log::info('Business connection active.');
            }

            if (isset($businessConnection['can_reply']) && !$businessConnection['can_reply']) {
                Log::warning('Bot cannot reply to the user.');
            }
        }

        // Kembalikan pesan untuk middleware selanjutnya atau handler
        return $next($message);
    }
}

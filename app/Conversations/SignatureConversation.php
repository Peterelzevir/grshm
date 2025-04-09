<?php

namespace App\Conversations;

use App\Models\AnswerModel;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Models\ConversationModel;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\Cache;

class SignatureConversation extends Conversation
{
    public $message;
    public $payload;

    public function askSignature()
    {
        try {
            $text = $this->payload['text'];

            $conversations = Cache::remember('conversations_all', now()->addMinutes(10), function () {
                return ConversationModel::all();
            });

            $signature = $conversations->map(function ($item) use ($text) {
                $array_key = explode(" ", $text);
                $array_key = array_map('strtolower', $array_key);

                $array_master = explode(" ", $item->keyword);
                $array_master = array_map('strtolower', $array_master);
                $matches = array_intersect($array_key, $array_master);

                if (count($matches) === count($array_master)) {
                    return [
                        'item' => $item,
                        'similarity' => 100
                    ];
                }

                return null;
            })->filter();

            $match_count = $signature->count();

            if ($match_count == 1) {
                $best_match = $signature->first();
                $answer_id = $best_match['item']->answer_id;

                // Caching data AnswerModel
                $message = Cache::remember("answer_{$answer_id}", now()->addMinutes(10), function () use ($answer_id) {
                    return AnswerModel::find($answer_id);
                });

                $this->say("{$message->message}" . "\n\n" . "Pesan ini dibalas oleh bot, jika jawaban belum sesuai, silahkan ketik atau klik " . "\n" . "/bantuanliveagent");
            } elseif ($match_count > 1) {
                $ids = $signature->map(function ($match) {
                    return $match['item']->id;
                })->values()->toArray();

                $signatures = ConversationModel::whereIn('id', $ids)->get();
                $this->multipleAnswer($signatures);
            } else {
                $this->say("Maaf, pertanyaan kakak belum dimengerti, bisakah kakak menjelaskan lebih detail pertanyaan kakak ?" . "\n\n" . "Pesan ini dibalas oleh bot, jika jawaban belum sesuai, silahkan ketik atau klik " . "\n" . "/bantuanliveagent");
            }
        } catch (\Throwable $th) {
            $this->say($th->getMessage());
        }
    }

    public function multipleAnswer($keywords)
    {
        $buttonArray = [];
        foreach ($keywords as $value) {
            $button = Button::create($value->title)
                ->value((string) $value->id);
            $buttonArray[] = $button;

        }

        $initialQuestion = "Silahkan pilih pertanyaan yang cocok dengan pertanyaan anda";
        $note = "\n\nNote: Ketik atau klik /cancel untuk membatalkan pilihan ini";
        $question = Question::create($initialQuestion . $note)
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons($buttonArray);

        return $this->ask($question, function (Answer $answer) {
            if ($this->isCancel($answer)) {
                return true;
            }

            if ($answer->isInteractiveMessageReply()) {
                $selected_id = $answer->getValue(); // ID pilihan tombol

                // Caching untuk ConversationModel
                $conversation = Cache::remember("conversation_{$selected_id}", now()->addMinutes(10), function () use ($selected_id) {
                    return ConversationModel::find($selected_id);
                });

                if ($conversation) {
                    $answer_id = $conversation->answer_id;

                    // Caching untuk AnswerModel
                    $message_to_send = Cache::remember("answer_{$answer_id}", now()->addMinutes(10), function () use ($answer_id) {
                        return AnswerModel::find($answer_id);
                    });

                    $this->say("{$message_to_send->message}" . "\n\n" . "Pesan ini dibalas oleh bot. Jika jawaban belum sesuai, silahkan ketik atau klik " . "\n" . "/bantuanliveagent");
                } else {
                    $this->say("Jawaban tidak ditemukan. Silakan coba lagi.");
                }
            }
        });
    }

    public function isCancel($answer)
    {
        if (is_user_cancel_conversation($answer)) {
            $this->say("Pertanyaan dibatalkan, silahkan kirimkan pertanyaan baru", get_botman_additional_parameter());

            return true;
        }
        return false;
    }

    public function run()
    {
        try {
            $this->askSignature();
        } catch (\Throwable $th) {
            $this->say($th->getMessage());
        }
    }
}

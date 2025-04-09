<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\Http;
use Exception;
use App\Helpers\ExceptionHandler;

class XMCheckAccountConversation extends Conversation
{
    public $account_number;
    public $platform_driver;
    public $platform_id;

    public function askAccountNumber()
    {
        $this->ask('Masukan nomor akun client', function (Answer $answer) {
            $number = $answer->getText();
            if (!is_numeric($number)) {
                $this->say('Masukan harus berupa angka');
                return $this->askAccountNumber();
            }
            $number = $answer->getText();
            $this->account_number = $number;
            $result = $this->getData($this->account_number);

            if (isset($result)) {
                $this->say('Akun tersebut sudah under jaringan guruforex');
            } else {
                $this->say('Maaf, akun tersebut tersebut belum berada di jaringan guruforex');
            }
        });
    }

    public function getData($account_number)
    {
        try {
            $url = ENV('XM_URL').'api/traders/'. $account_number;
            $token = 'Bearer ' . ENV('XM_URL_Token');

            $get_client = Http::withHeaders([
                'Authorization' => $token
            ])->get($url)->json();

            return $get_client;

        } catch (\Throwable $th) {
            $this->say($th->getMessage());
        }
    }

    /**
     * Start the conversation.
     */
    public function run()
    {
        $this->askAccountNumber();
    }
}

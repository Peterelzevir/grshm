<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Exception;
use Illuminate\Support\Facades\Http;
use App\Helpers\ExceptionHandler;

class ExnessCheckAccountConversation extends Conversation
{
    public $account_number;
    public $platform_driver;
    public $platform_id;

    public function askAccountNumber()
    {
        try {
            $this->ask('Masukan nomor akun client', function (Answer $answer) {
                $number = $answer->getText();
                if (!is_numeric($number)) {
                    $this->say('Masukan harus berupa angka');
                    return $this->askAccountNumber();
                }
                $number = $answer->getText();

                $this->account_number = $number;
                $result = $this->getData($this->account_number);

                if(!empty($result['data'])) {
                    $this->say('Akun tersebut sudah under jaringan guruforex');
                } else {
                    $this->say('Maaf, akun tersebut tersebut belum berada di jaringan guruforex');
                }

            });
        } catch (\Throwable $th) {
            $this->say($th->getMessage());
        }

    }

    public function getData($account_number)
    {
        try {
            $url_client = 'https://my.exnesstrade.pro/api/reports/clients?client_account=' . $account_number;
            $url_auth = 'https://my.exnesstrade.pro/api/v2/auth/';

            $auth = Http::post($url_auth, [
                'login' => ENV('EXNESS_USERNAME'),
                'password' => ENV('EXNESS_PASSWORD')
            ]);
            $token = 'JWT ' . $auth->json()['token'];

            $get_client = Http::withHeaders([
                'Authorization' => $token
            ])->get($url_client)->json();

            return $get_client;

        } catch (Exception $e) {
            $message = ExceptionHandler::bot($e);
            $this->say($message, get_botman_additional_parameter());
        }
    }

    public function run()
    {
        $this->askAccountNumber();
    }
}

<?php

namespace App\Http\Controllers;

use Exception;
use App\Conversations\ExnessCheckAccountConversation;
use App\Helpers\ExceptionHandler;
use Illuminate\Support\Facades\Http;

class ExnessCheckAccountBotController extends Controller
{
    public $platform_driver;

    public function run($platform_id, $query = [])
    {
        if (count($query) > 0) {
            try {
                if (!is_numeric($query[0])) {
                    return ('Masukan harus berupa angka');
                }

                $url_client = 'https://my.exnesstrade.pro/api/reports/clients?client_account=' . $query[0];
                $url_auth = 'https://my.exnesstrade.pro/api/v2/auth/';

                $auth = Http::post($url_auth, [
                    'login' => ENV('EXNESS_USERNAME'),
                    'password' => ENV('EXNESS_PASSWORD')
                ]);
                $token = 'JWT ' . $auth->json()['token'];

                $get_client = Http::withHeaders([
                    'Authorization' => $token
                ])->get($url_client)->json();

                if (!empty($get_client['data'])) {
                    return ('Akun tersebut sudah under jaringan guruforex');
                } else {
                    return ('Maaf, akun tersebut tersebut belum berada di jaringan guruforex');
                }
            } catch (Exception $e) {
                $message = ExceptionHandler::bot($e);

                return $message;
            }
        } else {
            $dpc = new  ExnessCheckAccountConversation($platform_id, $query = []);
            $dpc->platform_driver = $this->platform_driver;

            return $dpc;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Exception;
use App\Conversations\XMCheckAccountConversation;
use App\Helpers\ExceptionHandler;
use Illuminate\Support\Facades\Http;

class XMCheckAccountBotController extends Controller
{
    public $platform_driver;

    public function run($platform_id, $query = [])
    {
        if (count($query) > 0) {
            try {
                if (!is_numeric($query[0])) {
                    return ('Masukan harus berupa angka');
                }
                $url   = ENV('XM_URL') . 'api/traders/' . $query[0];
                $token = 'Bearer ' . ENV('XM_URL_Token');

                $get_client = Http::withHeaders([
                    'Authorization' => $token
                ])->get($url)->json();

                if (isset($get_client)) {
                    return ('Akun tersebut sudah under jaringan guruforex');
                } else {
                    return ('Maaf, akun tersebut tersebut belum berada di jaringan guruforex');
                }
            } catch (Exception $e) {
                $message = ExceptionHandler::bot($e);

                return $message;
            }
        } else {
            $dpc = new  XMCheckAccountConversation($platform_id, $query = []);
            $dpc->platform_driver = $this->platform_driver;

            return $dpc;
        }
    }
}

<?php

namespace App\Helpers;

use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class ExceptionHandler
{
    public static function web($error)
    {
        $production = env('APP_ENV') == 'production' ? true : false;

        $message = $error->getMessage();

        if ($production) {
            if ($error instanceof QueryException) {
                $code = $error->getCode();
                switch ($code) {
                    case '23000':
                        $message = _23000_ERROR;
                        break;
                    case '1265 ':
                        $message = _1265_ERROR;
                        break;
                    default:
                        // code...
                        break;
                }
            } else {
                Log::critical($error);
            }
        } else {
            Log::debug($error);
        }

        $data = [
            'message' => $message,
            'alert-type' => 'error',
        ];

        return $data;
    }

    public static function bot($error)
    {
        $production = env('APP_ENV') == 'production' ? true : false;

        $message = $error->getMessage();

        if ($production) {
            Log::critical($error);
            // \Sentry\captureException($error);
            $message = _EXCEPTION_MESSAGE;
        } else {
            Log::debug($error);
        }

        return $message;
    }

    public static function command($error)
    {
        $production = env('APP_ENV') == 'production' ? true : false;

        if ($production) {
            // Log::critical($error);
        } else {
            if ($error instanceof Exception) {
                print_r($error->getMessage());
            }
            Log::debug($error);
        }
    }
}

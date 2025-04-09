<?php

// use App\Models\ChartbotLead;
use App\Models\User;
use BotMan\BotMan\Messages\Incoming\Answer;
use Carbon\Carbon;

if (!function_exists('mark_date_when_equal_to_today')) {
    function mark_date_when_equal_to_today($date, $dateFormat = 'd/m/Y')
    {
        if (!is_null($date) && $date != '' && $date != ' ' && is_string($date)) {
            $today = Carbon::now()->format('Ymd');
            $carbonDate = Carbon::createFromFormat($dateFormat, $date)->format('Ymd');
            if ($carbonDate == $today) {
                return '<strong><u>' . $date . '</u></strong>';
            }
        }

        return $date;
    }
}

if (!function_exists('is_valid_start_and_end_date')) {
    function is_valid_start_and_end_date($startDate, $endDate, $dateFormat = 'Y-m-d')
    {
        if (!is_null($startDate) && $startDate != '' && !is_null($endDate) && $endDate != '') {
            $startDate = Carbon::createFromFormat($dateFormat, $startDate)->format('Ymd');
            $endDate = Carbon::createFromFormat($dateFormat, $endDate)->format('Ymd');
            if ($endDate > $startDate) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('get_botman_additional_parameter')) {
    function get_botman_additional_parameter()
    {
        return \config('botman.config.additional_parameters');
    }
}

if (!function_exists('is_user_cancel_conversation')) {
    function is_user_cancel_conversation($answer)
    {
        if ($answer instanceof Answer) {
            $cancelingCommands = \config('botman.config.conversation_canceling_commands');
            $answerText = $answer->getText();
            if (in_array($answerText, $cancelingCommands)) {
                return true;
            }
        }

        return false;
    }
}
if (!function_exists('is_valid_formula')) {
    function is_valid_formula($formula)
    {
        $formula = str_replace('sqrt', '', $formula);
        $formula_fixed = str_replace(' ', '', $formula);
        $formula_parts = str_split($formula_fixed);
        $operators = ['*', '/', '-', '+'];
        $is_valid = true;
        foreach ($formula_parts as $index => $part) {
            $char_before = ($index > 0) ? $formula_parts[$index - 1] : null;
            $char_after = ($index < count($formula_parts) - 1) ? $formula_parts[$index + 1] : null;
            if (in_array($part, $operators)) {
                if (in_array($char_before, $operators) || in_array($char_after, $operators)) {
                    $is_valid = false;
                    break;
                }
            } elseif ($part == '(') {
                if (in_array($char_after, $operators)) {
                    $is_valid = false;
                    break;
                }
                if ($index > 0 && !in_array($char_before, $operators)) {
                    $is_valid = false;
                    break;
                }
            } elseif ($part == ')') {
                if (in_array($char_before, $operators)) {
                    $is_valid = false;
                    break;
                }
                if (($index < count($formula_parts) - 1) && !in_array($char_after, $operators)) {
                    $is_valid = false;
                    break;
                }
            } else {
                $is_valid = true;
            }
        }

        return $is_valid;
    }
}
if (!function_exists('isInteger')) {
    function isInteger($input)
    {
        return ctype_digit(strval($input));
    }
}

if (!function_exists('is_valid_date_input')) {
    function is_valid_date_input($string_date)
    {
        $date_parts = explode('-', $string_date);
        if (count($date_parts) != 3) {
            return false;
        }
        if (!isInteger($date_parts[0])) {
            return false;
        }
        if (!isInteger($date_parts[1])) {
            return false;
        }
        if (!isInteger($date_parts[2])) {
            return false;
        }

        if (!checkdate($date_parts[1], $date_parts[2], $date_parts[0])) {
            return false;
        }

        return true;
    }
}

if (!function_exists('is_date_larger_than_today')) {
    function is_date_larger_than_today($date, $dateFormat = 'd/m/Y')
    {
        if (!is_null($date) && $date != '' && $date != ' ') {
            $today = Carbon::now()->format('Ymd');
            $carbonDate = Carbon::createFromFormat($dateFormat, $date)->format('Ymd');
            if ($carbonDate > $today) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('is_date_larger_or_equals_with_today')) {
    function is_date_larger_or_equals_with_today($date, $dateFormat = 'd/m/Y')
    {
        if (!is_null($date) && $date != '' && $date != ' ') {
            $today = Carbon::now()->format('Ymd');
            $carbonDate = Carbon::createFromFormat($dateFormat, $date)->format('Ymd');
            if ($carbonDate >= $today) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('is_date_lower_or_equals_than_today')) {
    function is_date_lower_or_equals_than_today($date, $dateFormat = 'd/m/Y')
    {
        if (!is_null($date) && $date != '' && $date != ' ') {
            $today = Carbon::now()->format('Ymd');
            $carbonDate = Carbon::createFromFormat($dateFormat, $date)->format('Ymd');
            if ($today <= $carbonDate) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('strip_message_tags')) {
    function strip_message_tags($message)
    {
        $allowedHtmlTags = (\config('botman.config.allowed_html_tags'));

        return strip_tags($message, $allowedHtmlTags);
    }
}

if (!function_exists('is_containts_word')) {
    function is_containts_word($str, $word)
    {
        if (strpos($str, $word) !== false) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('bot_message')) {
    function bot_message($message, $params = [])
    {
        $message_text = __($message, $params);
        $message_text = mb_convert_encoding($message_text, 'UTF-8', 'UTF-8');
        $message_to_send = strip_tags($message_text, \config('botman.config.allowed_html_tags'));
        $message_to_send = str_replace('&nbsp;', ' ', $message_to_send);

        return $message_to_send;
    }
}

if (!function_exists('ask_message')) {
    function ask_message($message, $stat_cancel = true)
    {
        if ($stat_cancel) {
            $message .= __('bot.message.cancel_tips');
        }

        return $message;
    }
}

if (!function_exists('format_to_currency')) {
    function format_to_currency($number)
    {
        return number_format($number, 0, '.', '.');
    }
}

if (!function_exists('multi_str_replace')) {
    function multi_str_replace($searchs = [], $replacer = null, $string = null)
    {
        $new_string = $string;

        foreach ($searchs as $key => $value) {
            $new_string = str_replace($value, $replacer, $new_string);
        }

        return $new_string;
    }
}

if (!function_exists('get_composer_data')) {
    function get_composer_data()
    {
        $composer_path = base_path('/composer.json');
        return json_decode(file_get_contents($composer_path));
    }
}

if (!function_exists('str_images_to_array')) {
    function str_images_to_array($images)
    {
        return json_decode($images, true) ?? [];
    }
}

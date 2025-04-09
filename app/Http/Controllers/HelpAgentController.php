<?php

namespace App\Http\Controllers;

use App\Conversations\HelpAgentConversation;

class HelpAgentController extends Controller
{
    public $platform_driver;

    public function run($platform_id, $query = [])
    {
        $dpc = new  HelpAgentConversation($platform_id, $query = []);
        $dpc->platform_driver = $this->platform_driver;

        return $dpc;
    }
}

<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class HelpAgentConversation extends Conversation
{
    public $platform_driver;
    public $platform_id;

    public function askHelpAgent()
    {
        return $this->say("Baik, mohon ditunggu sampai ada balasan dari live agent ya kak ");
    }

    public function run()
    {
        try {
            $this->askHelpAgent();
        } catch (\Throwable $th) {
            $this->say($th->getMessage());
        }
    }
}

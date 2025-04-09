<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RemoveWebhookCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:remove-webhook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the telegram webhook';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $token = config('botman.telegram.token');
        $url   = "https://api.telegram.org/bot{$token}/setWebhook?remove";

        $this->info("Remove webhook token : {$token}");
        $response = Http::post($url);

        $this->info($response->json('description', 'Unknown error'));
    }
}

<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SetWebhookCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:set-webhook {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets the telegram webhook to the given URL';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $token = config('botman.telegram.token');
        $url = $this->argument('url') . "/botman";;

        $this->info("Start set webhook with token : {$token} and url : {$url}");
        $response = Http::get("https://api.telegram.org/bot$token/setWebhook", compact('url'));

        $this->info($response->json('description', 'Unknown error'));
    }
}

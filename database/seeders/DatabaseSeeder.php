<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Badaso\BadasoSeeder;
use Database\Seeders\Badaso\CRUD\BadasoDeploymentOrchestratorSeeder;
use Database\Seeders\Badaso\ManualGenerate\BadasoManualGenerateSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(BadasoSeeder::class);
        $this->call(BadasoManualGenerateSeeder::class);
        $this->call(BadasoDeploymentOrchestratorSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        $this->call(TBMMeetingTableSeeder::class);
        $this->call(TBMRaceTableSeeder::class);
        $this->call(TBMRunnerTableSeeder::class);
        $this->call(TBMFormDataTableSeeder::class);
        $this->call(TBMFormLastRunnerTableSeeder::class);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TBMRunnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1;
        while($count < 10){
            DB::table('tbm_runners')->insert([
                'external_id' => 'tbm_runner_ext_id'.$count ,
                'name' => 'Runner Name '.$count,
                'tbm_race_id' => $count,
            ]);
            $count++;
        }
    }
}

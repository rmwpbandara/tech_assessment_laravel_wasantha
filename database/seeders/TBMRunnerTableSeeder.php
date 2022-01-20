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
            DB::table('t_b_m_runners')->insert([
                'external_id' => 't_b_m_runner_ext_id'.$count ,
                'name' => 'Runner Name '.$count,
                't_b_m_race_id' => $count,
                'created_at' => date("Y-m-d H:i:s")
            ]);
            $count++;
        }
    }
}

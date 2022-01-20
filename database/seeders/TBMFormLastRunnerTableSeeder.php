<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TBMFormLastRunnerTableSeeder extends Seeder
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
            DB::table('t_b_m_form_last_runners')->insert([
                'name' => 'Name '.$count,
                't_b_m_runner_id' => $count,
            ]);
            $count++;
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TBMFormDataTableSeeder extends Seeder
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
            DB::table('t_b_m_form_data')->insert([
                'name' => 'Name '.$count,
                'status' => 'Status '.$count,
                't_b_m_runner_id' => $count,
                'created_at' => date("Y-m-d H:i:s")
            ]);
            $count++;
        }
    }
}

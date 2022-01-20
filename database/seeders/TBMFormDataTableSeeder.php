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
            DB::table('tbm_form_data')->insert([
                'name' => 'Name '.$count,
                'status' => 'Status '.$count,
                'tbm_runner_id' => $count,
            ]);
            $count++;
        }
    }
}

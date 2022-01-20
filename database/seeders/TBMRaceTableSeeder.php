<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TBMRaceTableSeeder extends Seeder
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
            DB::table('tbm_races')->insert([
                'external_id' => 'tbm_race_ext_id'.$count ,
                'name' => 'Race Name '.$count,
                'tbm_meeting_id' => $count,
            ]);
            $count++;
        }
    }
}

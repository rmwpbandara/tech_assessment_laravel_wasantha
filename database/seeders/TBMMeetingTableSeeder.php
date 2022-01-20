<?php

namespace Database\Seeders;

use App\Models\TBMMeeting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TBMMeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TBMMeeting::factory()->count(20)->create();
        $count = 1;
        while($count < 10){
            DB::table('t_b_m_meetings')->insert([
                'external_id' => 't_b_m_meeting_ext_id'.$count ,
                'name' => 'Meeting Name '.$count,
                'created_at' => date("Y-m-d H:i:s")
            ]);
            $count++;
        }



    }
}

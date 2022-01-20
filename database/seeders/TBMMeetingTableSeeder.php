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
            DB::table('tbm_meetings')->insert([
                'external_id' => 'tbm_meeting_ext_id'.$count ,
                'name' => 'Meeting Name '.$count
            ]);
            $count++;
        }



    }
}

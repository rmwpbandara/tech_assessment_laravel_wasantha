<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBMRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_races', function (Blueprint $table) {
            $table->id();
            $table->string('external_id');
            $table->string('name');
            $table->unsignedBigInteger('tbm_meeting_id');
            $table->foreign('tbm_meeting_id')->references('id')->on('tbm_meetings')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_races');
    }
}

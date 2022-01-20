<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBMRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_b_m_runners', function (Blueprint $table) {
            $table->id();
            $table->string('external_id');
            $table->string('name');
            $table->unsignedBigInteger('t_b_m_race_id');
            $table->foreign('t_b_m_race_id')->references('id')->on('t_b_m_races')->onDelete('cascade');

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
        Schema::dropIfExists('t_b_m_runners');
    }
}

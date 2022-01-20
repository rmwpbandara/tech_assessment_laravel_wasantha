<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBMFormLastRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_b_m_form_last_runners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('t_b_m_runner_id');
            $table->foreign('t_b_m_runner_id')->references('id')->on('t_b_m_runners')->onDelete('cascade');
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
        Schema::dropIfExists('t_b_m_form_last_runners');
    }
}

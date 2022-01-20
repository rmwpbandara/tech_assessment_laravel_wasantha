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
        Schema::create('tbm_form_last_runners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('tbm_runner_id');
            $table->foreign('tbm_runner_id')->references('id')->on('tbm_runners')->onDelete('cascade');
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
        Schema::dropIfExists('tbm_form_last_runners');
    }
}

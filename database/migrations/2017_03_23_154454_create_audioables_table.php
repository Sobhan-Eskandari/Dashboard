<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudioablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audioables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('audio_id');
            $table->unsignedBigInteger('audioable_id');
            $table->string('audioable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audioables');
    }
}

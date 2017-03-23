<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->boolean('seen')->default(false);
            $table->enum('status', ['not-checked', 'checking', 'checked'])->default('not-checked');
            $table->bigInteger('tracking_code');
            $table->text('answer')->nullable();
            $table->dateTime('answered_at')->nullable();
            $table->bigInteger('answered_by')->nullable();
            $table->bigInteger('seen_by')->nullable();
            $table->dateTime('soft_delete')->nullable();
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
        Schema::dropIfExists('messages');
    }
}

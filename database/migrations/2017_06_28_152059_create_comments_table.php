<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('post_id')->index();
            $table->bigInteger('parent_id')->index()->nullable(true);
            $table->string('full_name');
            $table->string('subject');
            $table->text('message');
            $table->boolean('seen')->default(false);
            $table->tinyInteger('status')->default('0');
//            $table->enum('status', ['not-checked', 'checking', 'checked'])->default('not-checked');
            $table->uuid('tracking_code');
            $table->dateTime('answered_at')->nullable(true);
            $table->unsignedBigInteger('answered_by')->nullable(true);
            $table->unsignedBigInteger('seen_by')->nullable(true);
            $table->unsignedBigInteger('updated_by')->nullable(true);
            $table->dateTime('created_at')->nullable(true);
            $table->dateTime('updated_at')->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

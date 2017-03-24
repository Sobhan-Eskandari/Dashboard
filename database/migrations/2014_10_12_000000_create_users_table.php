<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('avatar')->nullable();
            $table->string('user_name')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->integer('role_id')->default(0);
            $table->string('password');
            $table->char('land_line',11)->nullable();
            $table->char('mobil',11)->nullable()->unique();
            $table->text('address')->nullable();
            $table->char('zip',10)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->tinyInteger('verified')->default(0);
            $table->unsignedBigInteger('created_by')->nullable(false);
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->string('email_token')->nullable();
            $table->rememberToken();
            $table->bigInteger('revisions')->default(0);
            $table->dateTime('last_seen')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

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
<<<<<<< HEAD
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
=======
            $table->string('avatar')->nullable(true);
            $table->string('user_name')->unique();
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('email')->unique();
            $table->integer('role_id')->default(0);
            $table->string('password');
            $table->char('land_line',11)->nullable(true);
            $table->char('mobile',11)->nullable(true)->unique();
            $table->text('address')->nullable(true);
            $table->char('zip',10)->nullable(true);
            $table->tinyInteger('gender')->nullable(true);
            $table->string('occupation')->nullable(true);
            $table->text('about')->nullable(true);
            $table->tinyInteger('verified')->default(0);
            $table->unsignedBigInteger('created_by')->nullable(false);
            $table->unsignedBigInteger('updated_by')->nullable(true);
            $table->string('email_token')->nullable(true);
            $table->rememberToken();
            $table->bigInteger('revisions')->default(0);
            $table->dateTime('last_seen')->nullable(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable(true);
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
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

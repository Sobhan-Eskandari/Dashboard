<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name')->unique()->nullable(true);
            $table->string('name')->nullable(true);
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('email')->unique();
            $table->integer('role_id')->default(0);
            $table->string('password');
            $table->char('land_line',11)->nullable(true);
            $table->char('mobile',11)->nullable(true)->unique();
            $table->text('address')->nullable(true);
            $table->text('about')->nullable(true);
            $table->char('zip',10)->nullable(true);
            $table->tinyInteger('gender')->nullable(true);
            $table->string('occupation')->nullable(true);
            $table->tinyInteger('verified')->default(0);
            $table->unsignedBigInteger('created_by')->nullable(true);
            $table->unsignedBigInteger('updated_by')->nullable(true);
            $table->string('email_token')->nullable(true);
            $table->rememberToken();
            $table->integer('revisions')->default(0);
            $table->dateTime('last_seen')->nullable(true);
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
        Schema::dropIfExists('admins');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('site_title')->nullable(false);
            $table->text('meta_description')->nullable(true);
            $table->string('email')->nullable(false);
            $table->char('land_line', 11)->nullable(false);
            $table->char('mobile', 11)->nullable(false);
            $table->char('zip', 10)->nullable(false);
            $table->text('address')->nullable(false);
            $table->string('instagram')->nullable(true)->default('https://www.instagram.com/');
            $table->string('telegram')->nullable(true)->default('https://telegram.org/');
            $table->string('facebook')->nullable(true)->default('https://www.facebook.com/');
            $table->string('linkedin')->nullable(true)->default('https://www.linkedin.com/');
            $table->string('twitter')->nullable(true)->default('https://twitter.com/');
            $table->string('aparat')->nullable(true)->default('http://www.aparat.com/');
            $table->mediumText('terms')->nullable(true);
            $table->mediumText('about')->nullable(true);
            $table->mediumText('guide')->nullable(true);
            $table->text('header')->nullable(true);
            $table->text('slider')->nullable(true);
            $table->string('favicon')->nullable(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->unsignedBigInteger('created_by')->nullable(false);
            $table->unsignedBigInteger('updated_by')->nullable(true);
            $table->integer('revisions')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

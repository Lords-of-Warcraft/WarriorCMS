<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth', function (Blueprint $table) {
            $table->id();
            $table->string('dbhost');
            $table->string('dbport');
            $table->string('dbname');
            $table->string('dbuser');
            $table->string('dbpass');
            $table->string('auth_type');
            $table->integer('exp');
            $table->timestamps();
        });

        Schema::create('realms', function (Blueprint $table) {
            $table->id();
            $table->string('realmname');
            $table->string('realmportal');
            $table->string('dbhost');
            $table->string('dbport');
            $table->string('dbname');
            $table->string('dbuser');
            $table->string('dbpass');
            $table->unsignedBigInteger('auth_database')->default(1);
            $table->timestamps();

            $table->foreign('auth_database')->references('id')->on('auth');
        });

        Schema::create('lang_strings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lang_code');
            $table->string('content');
            $table->timestamps();
            $table->unique(['name', 'lang_code']);
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('name');
            $table->integer('profile_image')->default(1);
        });

        Schema::create('profile_images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('realms');
        Schema::dropIfExists('auth');
        Schema::dropIfExists('lang_strings');
        Schema::dropIfExists('profiles');
    }
}

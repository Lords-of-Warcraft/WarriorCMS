<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNewsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('news_images');

        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->string('images')->nullable()->after('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('news_images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('uploaded_by')->nullable();
            $table->timestamps();
        });
    }
}

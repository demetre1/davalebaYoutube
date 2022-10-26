<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtube_davalebas', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('name');
            $table->integer('subscribers');
            $table->integer('likes');
            $table->integer('VideoLength');
            $table->integer('dislikes');

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
        Schema::dropIfExists('youtube_davalebas');
    }
};

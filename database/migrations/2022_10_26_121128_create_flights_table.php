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
        Schema::create('newUsers', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('link',240);
            $table->string('description',500);
            $table->bigInteger('number Of likes',);
            $table->bigInteger('number Of dislikes',);
            $table->bigInteger('number Of subscribes');
            $table->integer('video length');
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
        Schema::dropIfExists('users');
    }
};

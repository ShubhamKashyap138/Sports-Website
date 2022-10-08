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
        Schema::create('player', function (Blueprint $table) {
            $table->id('player_id');
            $table->string('name',60);
            $table->string('email',100);
            $table->string('state');
            $table->string('gender');
            $table->bigInteger('runs');
            $table->bigInteger('balls');
            $table->bigInteger('sixes');
            $table->bigInteger('fours');
            $table->integer('Age');
            $table->string('profile_pic');
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
        Schema::dropIfExists('players');
    }
};

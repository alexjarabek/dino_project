<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinos', function (Blueprint $table) {
            $table->string('id');
            $table->string('name', 50);
            $table->integer('health');
            $table->integer('armor');
            $table->integer('damage');
            $table->integer('speed');
            $table->integer('critical');
            $table->string('rarity', 50);
            $table->string('dream_team_status', 50);
            $table->integer('current_level');
            $table->integer('hybrid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dino');
    }
}

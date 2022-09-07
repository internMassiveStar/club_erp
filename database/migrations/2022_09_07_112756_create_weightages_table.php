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
        Schema::create('weightages', function (Blueprint $table) {
            $table->id();
            $table->integer('msp1');
            $table->integer('msp2');
            $table->integer('msp3');
            $table->integer('msp4');
            $table->integer('msp5');
            $table->integer('msp6');
            $table->integer('msp7');
            $table->integer('msp8');
            $table->integer('msp9');
            $table->integer('msp10');
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
        Schema::dropIfExists('weightages');
    }
};

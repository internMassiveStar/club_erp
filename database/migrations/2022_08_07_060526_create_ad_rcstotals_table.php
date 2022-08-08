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
        Schema::create('ad_rcstotals', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->integer('total_ad');
            $table->integer('total_paidad');
            $table->integer('total_duead');
            $table->integer('total_rcs');
            $table->integer('total_paidrcs');
            $table->integer('total_duercs');
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
        Schema::dropIfExists('ad_rcstotals');
    }
};

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
            $table->integer('member_id')->unique();
            $table->integer('total_ad');
            $table->integer('cash_ad')->default(0);
            $table->integer('cheque_ad')->default(0);
            $table->integer('total_paidad')->default(0);
            $table->integer('total_duead')->default(0);
            $table->integer('total_rcs');
            $table->integer('cash_rcs')->default(0);
            $table->integer('cheque_rcs')->default(0);
            $table->integer('total_paidrcs')->default(0);
            $table->integer('total_duercs')->default(0);
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

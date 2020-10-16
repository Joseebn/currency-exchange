<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalCurrencyRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical_currency_rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('base_coin_id');
            $table->foreign('base_coin_id')->references('id')->on('currency_acronyms');
            $table->index('base_coin_id');
            $table->unsignedBigInteger('rate_coin_id');
            $table->foreign('rate_coin_id')->references('id')->on('currency_acronyms');
            $table->decimal('exchange_value',9,3);
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
        Schema::dropIfExists('historical_currency_rates');
    }
}

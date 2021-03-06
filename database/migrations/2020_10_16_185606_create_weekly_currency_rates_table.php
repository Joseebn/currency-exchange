<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyCurrencyRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_currency_rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('base_coin_id');
            $table->foreign('base_coin_id')->references('id')->on('currency_acronyms');
            $table->index('base_coin_id');
            $table->unsignedBigInteger('rate_coin_id');
            $table->foreign('rate_coin_id')->references('id')->on('currency_acronyms');
            $table->decimal('exchange_value',20,12);
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
        Schema::dropIfExists('weekly_currency_rates');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CurrencyAcronym;
use App\Models\BaseCoin;

class BaseCoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coins = [
			'EUR', 'AUD', 'BRL', 'BTC', 'CAD', 'CHF', 'CLP', 'CNY', 'DKK', 'GBP',
			'HKD', 'HRK', 'HUF', 'INR', 'ISK', 'JPY', 'KRW', 'MXN', 'NOK', 'PLN', 
			'RON', 'RUB', 'SEK', 'SGD', 'USD', 'TRY', 'NZD', 'ZAR'
    	];

    	foreach ($coins as $coin) {
    		$getCoin =  CurrencyAcronym::where('acronym', $coin)->first();
    		$currencyAcronym = BaseCoin::create([
        		'base_coin_id' => $getCoin->id
        	]);
    	}
    }
}



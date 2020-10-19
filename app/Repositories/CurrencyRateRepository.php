<?php

namespace App\Repositories;

use App\Repositories\Contracts\CurrencyRateRepositoryInterface;
use App\Models\WeeklyCurrencyRate;
use App\Models\HistoricalCurrencyRate;

class CurrencyRateRepository implements CurrencyRateRepositoryInterface
{

	public function saveWeeklyCurrencyRate(Int $baseId, Int $rateId, Float $rateValue)
	{
		WeeklyCurrencyRate::create([
        	'base_coin_id' => $baseId,
        	'rate_coin_id' => $rateId,
        	'exchange_value' => $rateValue
        ]);
	}
}

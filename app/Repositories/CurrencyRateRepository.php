<?php

namespace App\Repositories;

use App\Models\WeeklyCurrencyRate;
use App\Models\HistoricalCurrencyRate;

class CurrencyRateRepository extends BaseRepository
{
	public function saveWeeklyCurrencyRate($currencyExchange)
	{
		dd($currencyExchange);
	}
}

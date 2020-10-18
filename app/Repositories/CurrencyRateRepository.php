<?php

namespace App\Repositories;

use App\Repositories\Contracts\CurrencyRateRepositoryInterface;
use App\Models\WeeklyCurrencyRate;
use App\Models\HistoricalCurrencyRate;

class CurrencyRateRepository implements CurrencyRateRepositoryInterface
{

	public function saveWeeklyCurrencyRate(Object $currencyExchange)
	{
		dd($currencyExchange);
	}
}

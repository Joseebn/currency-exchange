<?php

namespace App\Services;
use App\Repositories\CoinRepository;
use App\Repositories\CurrencyRateRepository;

class CurrencyServices
{
	
	public function __construct(CoinRepository $coinRepository, CurrencyRateRepository $currencyRateRepository)
	{
		$this->coinRepository = $coinRepository;
        $this->currencyRateRepository = $currencyRateRepository;
	}

	public function saveLastCurrencyExchange($currencyExchange)
	{
		$coins = $this->coinRepository->allCurrencyAcronyms();
		$baseCoin = $this->coinRepository->allBaseCoins();

		$this->currencyRateRepository->saveWeeklyCurrencyRate($currencyExchange);
	}
}

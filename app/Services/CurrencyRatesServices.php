<?php

namespace App\Services;
use App\Repositories\CurrencyAcronymRepository;
use App\Repositories\CurrencyRateRepository;

class CurrencyRatesServices
{
	
	public function __construct(CurrencyAcronymRepository $currencyAcronymRepository, CurrencyRateRepository $currencyRateRepository)
	{
		$this->currencyAcronymRepository = $currencyAcronymRepository;
        $this->currencyRateRepository = $currencyRateRepository;
	}

	public function saveLastCurrencyExchange($currencyExchange)
	{
		$coins = $this->currencyAcronymRepository->getCurrencyAcronyms();
		dd($coins);
		$this->currencyRateRepository->saveWeeklyCurrencyRate($currencyExchange);
	}
}
<?php

namespace App\Services;
use App\Repositories\CoinRepository;
use App\Repositories\CurrencyRateRepository;

class CurrencyServices
{
	protected $coins;
	protected $baseCoin;
	
	public function __construct(CoinRepository $coinRepository, CurrencyRateRepository $currencyRateRepository)
	{
		$this->coinRepository = $coinRepository;
        $this->currencyRateRepository = $currencyRateRepository;
	}

	public function saveLastCurrencyExchange($currencyExchange)
	{
		$this->coins = $this->coinRepository->allBaseCoins();
		$this->baseCoin = $this->coinRepository->getCoinByAcronym($currencyExchange->base);

		$rates = collect($currencyExchange->rates);
		$comparativeCoin = $this->baseCoin->acronym;
		
		foreach ($this->coins as $coin) {
			if ($coin->acronym == $this->baseCoin->acronym) {
				$this->saveCurrencyRate($coin, $rates);
				continue;
			}

			$rates = $this->getCurrencyChanges($comparativeCoin, $coin->acronym, $rates);
			$this->saveCurrencyRate($coin, $rates);
			$comparativeCoin = $coin->acronym;
		}
	}

	public function saveCurrencyRate($baseCoin, $rates)
	{
		foreach ($this->coins as $coin) {
			if ($coin->acronym == $baseCoin->acronym) {
				continue;
			}
			$this->currencyRateRepository->saveWeeklyCurrencyRate($baseCoin->id, $coin->id, $rates[$coin->acronym]);
		}
	}

	public function getCurrencyChanges($comparativeCoin, $coinCal, $rates) {

		$newRates[$comparativeCoin] = (1/$rates[$coinCal]);

		foreach ($this->coins as $coin) {
			if ($coin->acronym == $comparativeCoin || $coin->acronym == $coinCal) {
				continue;
			}
			$newRates[$coin->acronym] = ($rates[$coinCal] * $newRates[$comparativeCoin]) / $rates[$coin->acronym];
		}

		return $newRates;
	}


	public function saveDailyCurrencyExchange($currencyExchange)
	{
		//	
	}

	public function deleteDayCurrencyExchange($date)
	{
		# code...
	}
}

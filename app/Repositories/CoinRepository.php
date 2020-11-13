<?php

namespace App\Repositories;

use App\Repositories\Contracts\CoinRepositoryInterface;
use App\Models\CurrencyAcronym;
use App\Models\BaseCoin;

class CoinRepository implements CoinRepositoryInterface
{
	public function allBaseCoins()
	{
		return BaseCoin::whereAcronym()->get();
	}

	public function getCoinByAcronym(String $acronym)
	{
		return CurrencyAcronym::where('acronym', $acronym)->first();
	}
}

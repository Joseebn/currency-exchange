<?php

namespace App\Repositories;

use App\Repositories\Contracts\CoinRepositoryInterface;
use App\Models\CurrencyAcronym;
use App\Models\BaseCoin;

class CoinRepository implements CoinRepositoryInterface
{
	public function allCurrencyAcronyms()
	{
		return CurrencyAcronym::all();
	}

	public function allBaseCoins()
	{
		return BaseCoin::all();
	}
}

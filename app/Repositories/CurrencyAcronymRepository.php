<?php

namespace App\Repositories;

use App\Models\CurrencyAcronym;

class CurrencyAcronymRepository extends BaseRepository
{
	public function __construct(CurrencyAcronym $currencyAcronym)
	{
		$this->currencyAcronym = $currencyAcronym;
	}

	public function getCurrencyAcronyms()
	{
		return $currencyAcronym->all();
	}
}

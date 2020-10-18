<?php

namespace App\Repositories\Contracts;

interface CoinRepositoryInterface
{
    public function allCurrencyAcronyms();

    public function allBaseCoins();
}

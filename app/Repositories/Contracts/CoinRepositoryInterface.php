<?php

namespace App\Repositories\Contracts;

interface CoinRepositoryInterface
{
    public function allBaseCoins();

    public function getCoinByAcronym(String $acronym);
}

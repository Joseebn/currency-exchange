<?php

namespace App\Repositories\Contracts;

interface CurrencyRateRepositoryInterface
{
    public function saveWeeklyCurrencyRate(Int $baseId, Int $rateId, Float $rateValue);
}

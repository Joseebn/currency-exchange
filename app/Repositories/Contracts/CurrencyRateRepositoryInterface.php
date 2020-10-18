<?php

namespace App\Repositories\Contracts;

interface CurrencyRateRepositoryInterface
{
    public function saveWeeklyCurrencyRate(Object $currencyExchange);
}
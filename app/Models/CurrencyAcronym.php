<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\WeeklyCurrencyRate;
use App\Models\HistoricalCurrencyRate;

class CurrencyAcronym extends Model
{
    protected $table = 'currency_acronyms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'acronym', 'name', 'human_name_sp', 'human_name_pt', 'human_name_en', 'country', 'flag'
    ];

    public function weeklyBaseCoin()
    {
        return $this->hasMany(WeeklyCurrencyRate::class, 'base_coin_id', 'id');
    }

    public function weeklyRateCoin()
    {
        return $this->hasMany(WeeklyCurrencyRate::class, 'rate_coin_id', 'id');
    }

    public function historicalBaseCoin()
    {
        return $this->hasMany(HistoricalCurrencyRate::class, 'base_coin_id', 'id');
    }

    public function historicalRateCoin()
    {
        return $this->hasMany(HistoricalCurrencyRate::class, 'rate_coin_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CurrencyAcronym;

class HistoricalCurrencyRate extends Model
{
    protected $table = 'historical_currency_rates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'base_coin_id', 'rate_coin_id', 'exchange_value'
    ];

	public function baseCoinName()
    {
        return $this->belongsTo(CurrencyAcronym::class, 'base_coin_id');
    }

    public function rateCoinName()
    {
        return $this->belongsTo(CurrencyAcronym::class, 'rate_coin_id');
    }
}

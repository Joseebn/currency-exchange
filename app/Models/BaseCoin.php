<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CurrencyAcronym;

class BaseCoin extends Model
{
    protected $table = 'base_coins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'base_coin_id'
    ];

	public function coinName()
    {
        return $this->belongsTo(CurrencyAcronym::class);
    }
}
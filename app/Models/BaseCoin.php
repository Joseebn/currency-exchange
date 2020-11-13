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

    public function scopeWhereAcronym($query)
    {
        return $query->select(
                        'currency_acronyms.id',
                        'currency_acronyms.acronym',
                        'currency_acronyms.name',
                        'currency_acronyms.human_name_sp',
                        'currency_acronyms.human_name_pt',
                        'currency_acronyms.human_name_en',
                        'currency_acronyms.country',
                        'currency_acronyms.flag'
                    )
                    ->join('currency_acronyms', 'currency_acronyms.id', '=', 'base_coins.base_coin_id');
    }
}

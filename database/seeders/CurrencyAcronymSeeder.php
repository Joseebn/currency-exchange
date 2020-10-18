<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CurrencyAcronym;

class CurrencyAcronymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coins = $this->getCoins();
        foreach ($coins as $coin) {
        	$currencyAcronym = CurrencyAcronym::create([
        		'acronym' => $coin['acronym'], 
				'name' => $coin['name'], 
				'human_name_sp' => $coin['human_name_sp'], 
				'human_name_pt' => $coin['human_name_pt'], 
				'human_name_en' => $coin['human_name_en'],
				'country' => $coin['country'],
				'flag' => $coin['flag']
        	]);
        }
    }

    public function getCoins()
    {
    	return [
            'EUR' => [
                'acronym' => 'EUR', 
                'name' => 'Euro', 
                'human_name_sp' => 'Euro', 
                'human_name_pt' => 'Euro', 
                'human_name_en' => 'Euro',
                'country' => 'European Union',
                'flag' => null
            ],
        ];
    }
}

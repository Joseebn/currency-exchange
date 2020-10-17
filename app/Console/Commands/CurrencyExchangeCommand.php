<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ApiFixerServices;
use App\Services\CurrencyRatesServices;

class CurrencyExchangeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:currency-exchange {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get last or historical day currency exchange and save in database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ApiFixerServices $apiFixerServices, CurrencyRatesServices $currencyRatesServices)
    {
        parent::__construct();
        $this->apiFixerServices = $apiFixerServices;
        $this->currencyRatesServices = $currencyRatesServices;
    }

    /**
     * Execute the console command.
     *
     * @param  \App\Support\DripEmailer  $drip
     * @return mixed
     */
    public function handle()
    {
        $currencyExchange = $this->currencyExchange();

        if ($this->argument('type') == 'latest') {
            $this->currencyRatesServices->saveLastCurrencyExchange($currencyExchange);
        }

        return $currencyExchange->success;
    }


    public function currencyExchange() {
    	$params = [
    		'base' => 'EUR',
    	];
    	return $this->apiFixerServices->getCurrency($this->argument('type'), $params);
    }
}

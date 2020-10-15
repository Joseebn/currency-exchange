<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Carbon\Carbon;

class ConnectToApiFixerTest extends TestCase
{
    //public $mockConsoleOutput = true;

    public function itHasCurrencyExchangeCommand()
    {
        $this->assertTrue(class_exists(\App\Console\Commands\CurrencyExchangeCommand::class));
    }

    public function testConnectToApiFixer()
    {
        $response = $this->artisan('command:currency-exchange ' . Carbon::now()->format('Y-m-d'));

        $this->assertSame(1, $response);
    }
}
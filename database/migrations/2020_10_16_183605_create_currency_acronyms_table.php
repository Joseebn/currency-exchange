<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyAcronymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_acronyms', function (Blueprint $table) {
            $table->id();
            $table->string('acronym', 6);
            $table->string('name', 60);
            $table->string('human_name_sp', 60);
            $table->string('human_name_pt', 60);
            $table->string('human_name_en', 60);
            $table->string('country', 60)->nullable();
            $table->string('flag', 60)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_acronyms');
    }
}

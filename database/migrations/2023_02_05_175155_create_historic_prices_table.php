<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historic_prices', function (Blueprint $table) {
            $table->id();
            $table->date('date')->index();
            $table->string('ticker')->index();
            $table->string('market')->nullable();
            $table->string('company_name')->nullable();
            $table->string('specification')->nullable();
            $table->float('open_price', 8, 2)->nullable();
            $table->float('maximum_price', 8, 2)->nullable();
            $table->float('minimum_price', 8, 2)->nullable();
            $table->float('average_price', 8, 2)->nullable();
            $table->float('close_price', 8, 2)->nullable();
            $table->integer('volume')->nullable();
            $table->integer('factor')->nullable();
            $table->string('isin')->index();
            $table->timestamps();
            $table->unique(['date', 'ticker', 'isin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historic_prices');
    }
};

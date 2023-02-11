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
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj_cia');
            $table->date('dt_refer')->index();
            $table->string('denom_cia');
            $table->integer('cd_cvm')->index();
            $table->string('moeda');
            $table->string('escala_moeda');
            $table->date('dt_fim_exerc');
            $table->string('cd_conta')->index();
            $table->string('ds_conta');
            $table->float('vl_conta', 15, 2);
            $table->string('st_conta_fixa');
            $table->unique(['dt_refer', 'cd_conta', 'cd_cvm']);
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
        Schema::dropIfExists('balances');
    }
};

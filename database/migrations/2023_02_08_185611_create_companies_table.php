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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            // valor mobiliario
            $table->string('cnpj_companhia')->index();
            $table->string('ticker')->index();
            $table->string('valor_mobiliario')->nullable();
            $table->string('segmento')->nullable();
            $table->integer('qnt_on')->nullable();
            $table->integer('qnt_pn')->nullable();
            $table->integer('cd_cvm')->index();
            $table->string('denom_cia');
            $table->string('setor_atividade')->nullable();
            $table->string('descricao_atividade')->nullable();
            $table->string('situacao_emissor')->nullable();
            $table->string('especie_controle_acionario')->nullable();
            $table->string('pagina_web')->nullable();

            $table->timestamps();

            $table->unique('ticker');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};

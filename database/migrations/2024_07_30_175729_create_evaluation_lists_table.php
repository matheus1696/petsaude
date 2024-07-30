<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluation_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type'); //Auto Avaliação, Avaliação dos seus pares, Avaliação Por Função
            
            //Se for Auto avaliação

            //Se for Avaliação de Pares

            //Se for Avaliação por Função
                //Informa as Funções Avaliadas -> Tabela Funções
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->timestamps();

            $table->foreign('organization_id')->references('id')->on('company_organizations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_lists');
    }
};

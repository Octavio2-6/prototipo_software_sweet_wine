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
        Schema::create('vinhos', function (Blueprint $table) {

            $table->id();
            $table->text('nomeVinho');
            $table->text('nacionalidadeVinho');
            $table->date('dataFabricacao');
            $table->date('dataValidade');
            $table->integer('codDoFornecedor');
            $table->foreign('codDoFornecedor')->references('id')->on('fornecedores');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinhos');
    }
};

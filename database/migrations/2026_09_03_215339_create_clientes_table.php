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
        Schema::create('clientes', function (Blueprint $table) {

            $table->id();
            $table->text('cpfCliente')->unique();
            $table->text('nomeCliente');
            $table->text('telefoneCliente');
            $table->date('dataNascimento');
            $table->text('enderecoCliente');
            $table->text('cepCliente');
            $table->integer('codCidade');
            $table->foreign('codCidade')->references('id')->on('cidades');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

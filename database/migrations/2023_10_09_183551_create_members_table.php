<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->date('data_nascimento')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->string('telefone_fixo', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->text('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('cargo', 50)->nullable();
            $table->string('cargo_admin', 50)->nullable();
            $table->json('departamentos');
            $table->date('data_membresia')->nullable();
            $table->text('foto_perfil')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

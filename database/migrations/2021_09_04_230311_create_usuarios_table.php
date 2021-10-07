<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('user_name', 255)->unique();
            $table->string('email')->unique();
            $table->string('senha', 255);
            $table->string('data_nascimento', 10);
            $table->string('telefone', 15);
            $table->string('cep', 9)->nullable();
            $table->string('logradouro', 255)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 255)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 50)->nullable();
            $table->string('uf', 2)->nullable();
            $table->text('foto')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 50);
            $table->string("apelido", 50);
            $table->string("sexo", 20);
            $table->string("pai", 60);
            $table->string("mae", 60);
            $table->string("estado_civil", 20);
            $table->date("data_nasc")->format('dd/mm/yyyy');
            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('provincia_id');
            $table->foreign('provincia_id')->references('id')->on('provincias')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('distrito_id');
            $table->foreign('distrito_id')->references('id')->on('distritos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string("bairro", 30);
            $table->string("casa", 20);
            $table->string("quart", 20);
            $table->string("rua", 20);
            $table->string("email", 50);
            $table->string("contacto1", 20);
            $table->string("contacto2", 20)->nullable();
            $table->string("tipo_doc", 50);
            $table->string("num_doc", 50);
            $table->string("nuit", 30);
            $table->string("observacao", 100)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pessoas');
    }

}

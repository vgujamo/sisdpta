<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('processos', function (Blueprint $table) {
            $table->id();
            $table->string('num_processo', 50)->unique();
            $table->date('data_entrada')->format('dd/mm/yyyy');
            $table->unsignedBigInteger('seccao_id');
            $table->foreign('seccao_id')->references('id')->on('seccaos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('subseccao_id');
            $table->foreign('subseccao_id')->references('id')->on('sub_seccaos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('especie_id');
            $table->foreign('especie_id')->references('id')->on('especies')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('juiz_id');
            $table->foreign('juiz_id')->references('id')->on('juizs')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('requerrente', 50);
            $table->string('recorrido', 50)->nullable();
            $table->string('contaparte', 50);
            $table->string('objecto', 100);
            $table->string('anexo')->nullable();
            $table->string('descricao', 100)->nullable();
            $table->unsignedBigInteger('despacho_id');
            $table->foreign('despacho_id')->references('id')->on('despachos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('processos');
    }

}

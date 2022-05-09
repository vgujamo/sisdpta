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
            $table->string('num_processo',50);
            $table->date('data_entrada')->format('dd/mm/yyyy');
            $table->string('seccao',50);
            $table->string('subseccao',50);
            $table->string('especie',50);
            $table->string('requerrente',50);
            $table->string('recorrido',50);
            $table->string('contaparte',50);
            $table->string('objecto',100);
            $table->string('descricao',100);
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

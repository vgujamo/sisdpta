<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nif',10);
            $table->unsignedBigInteger('pessoa_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

  
    public function down() {
        Schema::dropIfExists('funcionarios');
    }

}

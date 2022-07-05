<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParecersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('parecers', function (Blueprint $table) {
            $table->id();
            $table->morphs('parecer');
            $table->string('nome');
            $table->string('processo');
            $table->string('descricao_parecer')->nullable();
            $table->string('user',50)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

 
    public function down() {
        Schema::dropIfExists('parecers');
    }

}

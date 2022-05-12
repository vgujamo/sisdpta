<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Processo extends Model {

    protected $table = 'processos';
    protected $fillable = [
        "num_processo",
        "data_entrada",
        "seccao",
        "subseccao",
        "especie",
        "requerrente",
        "recorrido",
        "contaparte",
        "objecto",
        "anexo",
        "descricao",
    ];
    
   
   

    use HasFactory;
    use SoftDeletes;
}

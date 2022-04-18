<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model {

    protected $table = 'pessoas';
    protected $fillable = [
        "nome",
        "apelido",
        "sexo",
        "pai",
        "mae",
        "estado_civil",
        "data_nasc",
        "nacionalidade",
        "provincia_nas",
        "distrito_nas",
        "bairro",
        "casa",
        "quart",
        "rua",
        "email",
        "contacto1",
        "contacto2",
        "tipo_doc",
        "num_doc",
        "nuit",
        "observacao",
    ];
    
    public function funcionario() {
    return $this->hasOne(Funcionario::class);
    
    }

    use SoftDeletes;
    use HasFactory;
}

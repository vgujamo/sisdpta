<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model {

    use SoftDeletes;
    use HasFactory;

    protected $table = 'pessoas';
    protected $fillable = [
        "nome",
        "apelido",
        "sexo",
        "pai",
        "mae",
        "estado_civil",
        "data_nasc",
        "pais_id",
        "provincia_id",
        "distrito_id",
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
    
    public function juiz() {
        return $this->hasOne(Juiz::class);
    }

    public function pais() {
        return $this->belongsTo(Pais::class)
                        ->withDefault([
                            'nome' => 'M/A',
        ]);
    }

    public function provicnia() {
        return $this->belongsTo(Provincia::class);
    }

    public function distrito() {
        return $this->belongsTo(Distrito::class);
    }

}

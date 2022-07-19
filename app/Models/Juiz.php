<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Juiz extends Model {

    use HasFactory;
    use SoftDeletes;

    protected $table = 'juizs';
    protected $fillable = [
        "pesidente",
        "seccao_id",
        "subseccao_id",
        "descricao",
        "data_inicial",
        "data_final",
    ];

    public function attributes() {
        [
            'seccao_id' => 'Seccao',
            'subseccao_id' => 'SubSeccao',
        ];
    }

    public function pessoa() {
        return $this->belongsTo(Pessoa::class);
    }

    public function seccao() {
        return $this->belongsTo(Seccao::class);
    }

    public function pais() {
        return $this->belongsTo(Pais::class);
    }

}

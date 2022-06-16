<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especie extends Model {

    use SoftDeletes;
    use HasFactory;

    protected $table = 'especies';
    protected $fillable = [
        "nome",
        "seccao_id",
        "subseccao_id",
        "descricao",
    ];

    public function subseccao() {
        return $this->belongsTo(SubSeccao::class);
    }

    public function seccao() {
        return $this->belongsTo(Seccao::class)->withDefault([
                    'nome' => 'N/A'
        ]);
    }

}

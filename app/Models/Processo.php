<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Processo extends Model {

    use HasFactory;
    use SoftDeletes;

    protected $table = 'processos';
    protected $fillable = [
        "num_processo",
        "data_entrada",
        "seccao_id",
        "subseccao_id",
        "especie_id",
        "juiz_id",
        "requerrente",
        "recorrido",
        "contaparte",
        "objecto",
        "anexo",
        "descricao",
        "despacho_id",
        "parecer_id",
        "user_id",
    ];
    protected $attributes = [
        'recorrido' => 'N/A',
    ];

    public function seccao() {
        return $this->belongsTo(Seccao::class)->withDefault([
                    'nome' => 'N\A',
        ]);
    }

    public function subseccao() {
        return $this->belongsTo(SubSeccao::class)->withDefault([
                    'nome' => 'N\A',
        ]);
    }

    public function especie() {
        return $this->belongsTo(Especie::class)->withDefault([
                    'nome' => 'N\A',
        ]);
    }

    public function juiz() {
        return $this->belongsTo(Juiz::class);
      
    }
    
    public function parecer() {
        return $this->belongsTo(Parecer::class)
                ->withDefault([
                    'nome' => 'N/A',
                ]);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seccao extends Model {

    use SoftDeletes;
    use HasFactory;

    protected $table = 'seccaos';
    protected $fillable = [
        "nome",
        "descricao",
    ];

    
    public function subseccao() {
        return $this->hasMany(SubSeccao::class);
    }

    public function especies() {
        return $this->hasMany(Especie::class);
    }
    
    public function processo() {
        return $this->hasMany(Processo::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincia extends Model {

    use SoftDeletes;
    use HasFactory;

    protected $table = 'provincias';
    protected $fillable = [
        "nome",
        "descricao",
    ];

    public function pessoa() {
        return $this->hasMany(Pessoa::class);
    }
    
    public function funcionario() {
        return $this->hasMany(Funcionario::class);
    }
    
    public function juiz() {
        return $this->hasMany(Juiz::class);
    }

    public function pais() {
        return $this->belongsTo(Pais::class);
    }

    public function distrito() {
        return $this->hasMany(Distrito::class);
    }

}

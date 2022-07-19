<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pais extends Model {

    use SoftDeletes;
    use HasFactory;
    
    protected $table = 'pais';
    protected $fillable = [
        "nome",
        "nacionalidade",
        "descricao",
    ];

    public function pessoa() {
        return $this->belongsTo(Pais::class);
        
    }
    
    public function funcionario() {
        return $this->belongsTo(Pais::class);
        
    }
    
    public function juiz() {
        return $this->belongsTo(Juiz::class);
        
    }
    
    
    public function provincia() {
        return $this->haMany(Provincia::class);
    }
    
    
    public function distrito() {
        return $this->haMany(Distrito::class);
        
    }
}

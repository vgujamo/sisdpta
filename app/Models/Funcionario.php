<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model {

    use SoftDeletes;
    use HasFactory;

    protected $table = 'funcionarios';
    protected $fillable = [
        "nif",
    ];

    public function pessoa() {
        return $this->belongsTo(Pessoa::class);
      
    }

    public function pais() {
        return $this->belongsTo(Pais::class);
                        
    }

}

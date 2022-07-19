<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubSeccao extends Model {

    use SoftDeletes;
    use HasFactory;

    public function seccao() {
        return $this->belongsTo(Seccao::class);
    }
    
    public function especie() {
        return $this->hasMany(Especie::class);
    }
    
    public function juiz() {
        return $this->hasMany(Juiz::class);
    }

}

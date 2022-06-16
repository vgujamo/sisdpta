<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Distrito extends Model {

    use SoftDeletes;
    use HasFactory;

    protected $table = 'distritos';
    protected $fillable = [
        "nome",
        "descricao",
    ];

    public function provincia() {
        return $this->belongsTo(Provicia::class);
    }

    public function pais() {
        return $this->belongsTo(Pais::class);
    }

}

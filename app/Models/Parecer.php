<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

class Parecer extends Model {

    use HasFactory;
    use SoftDeletes;

    protected $table = 'parecers';
    protected $fillable = [
        'nome',
        'processo',
        'descricao_parecer',
        'user',
    ];

    public function processo() {
        return $this->hasMany(Processo::class);
    }

    public function parecer() {
        return $this->morphTo();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexo extends Model {

    use HasFactory;

    protected $table = 'anexos';
    
    protected $fillable = [
        'nome',
        'descricao',
        'ext',
        'url',
        'tamanho',
    ];

    public function anexavel() {
        return $this->morphTo();
    }
    
    public function getFicheiroAttribute(){
        return \Illuminate\Support\Facades\Storage::disk('processos')->url($this->url);
    }

}

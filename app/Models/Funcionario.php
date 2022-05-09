<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model {

    protected $table = 'funcionarios';
    protected $fillable = [
        "nif",
    ];


    public function pessoa() {
        return $this->belongsTo(Pessoa::class)->withDefault([
                    'nome' => 'N\A',
                    'apelido' => 'N\A',
        ]);
    }
    use SoftDeletes;
    use HasFactory;

}

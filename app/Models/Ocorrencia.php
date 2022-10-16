<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'endereco',
        'bairro',
        'cidade',
        'img',
        'usuario_id',
        'categoria_id',
        'situacao'
    ];
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $fillabe = [
        'nm_paciente',
        'dt_nascimento',
        'cpf',
        'rg',
        'sexo',
        'email', 
        'endereco', 
        'cidade', 
        'bairro', 
        'complemento',
        'cep', 
        'fone_primario', 
        'fone_secundario', 
        'observacoes'
    ];
}

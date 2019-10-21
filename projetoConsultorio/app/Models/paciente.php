<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $table = 'paciente';
    protected $fillable = [
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

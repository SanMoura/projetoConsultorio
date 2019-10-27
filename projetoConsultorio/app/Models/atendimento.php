<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class atendimento extends Model
{
    protected $table = 'atendimento';
    protected $fillable = [
        'paciente_id',
        'dt_atendimento',
        'user_id_medico',
        'cd_convenio',
        'dt_alta'  
    ];

    public function paciente()
    {
        return $this->belongsTo(paciente::class, 'paciente_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id_medico');
    }
}

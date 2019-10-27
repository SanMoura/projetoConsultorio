<?php

namespace App\Http\Controllers\recepcao\atendimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\Especialidade;
use App\Models\atendimento;
use App\User;

class PacienteController extends Controller
{
    public function search(Request $request, paciente $pacientes){
        $input = $request->all();
        $paciente = $pacientes->where('nm_paciente','like', $input)->get();
        
          

        return $paciente;
    }

    public function index(){
        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO > PACIENTE';
        return view('recepcao.atendimento.paciente', compact('ds_pagina'));
    }

    public function store(Request $request, paciente $pacientes){
        $formPaciente = $request->only([
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
            ]);

        $insert = $pacientes->create(
            $formPaciente
        );

        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO > PACIENTE > ATENDER';

        $cd_paciente = $insert->id;

        $nm_paciente = paciente::where('id',$cd_paciente)
        ->get();

        $especialidades = Especialidade::where('ativo',1)
                                       ->get();

        $medicos = User::where('tipo_usuario_id',3)
                        ->get();

        return view('recepcao.atendimento.atender', compact('ds_pagina','cd_paciente','nm_paciente', 'especialidades', 'medicos'));
    }
}

<?php

namespace App\Http\Controllers\recepcao\atendimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\atendimento;
use App\Models\Especialidade;
use App\Models\paciente;
use App\User;

class AtendimentoController extends Controller
{
    public function index(){
        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO';

        $atendimentos = atendimento::where('dt_alta', null)
                                    ->with('paciente')
                                    ->with('usuario')
                                    ->get();

        return view('recepcao.atendimento.atendimento', compact('atendimentos', 'ds_pagina'));
    }

    public function create(atendimento $atendimentos){
        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO > PACIENTE > ATENDER';
        $cd_paciente = $_GET['paciente'];

        $nm_paciente = Paciente::where('id',$cd_paciente)
        ->get();

        $especialidades = Especialidade::where('ativo',1)
                                       ->get();

        $medicos = User::where('tipo_usuario_id',3)
                        ->get();

        return view('recepcao.atendimento.atender', compact('ds_pagina','cd_paciente','nm_paciente', 'especialidades', 'medicos'));
    }

    public function store(request $request ,atendimento $atendimento){
        $formAtemdimento = $request->only([
            'paciente_id',
            'dt_atendimento',
            'user_id_medico',
            'cd_convenio',
        ]);

        $insert = $atendimento->create(
            $formAtemdimento
        );

        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO';
        
        return view('recepcao.atendimento.atendimento', compact('ds_pagina'));
    }
}

<?php

namespace App\Http\Controllers\recepcao\atendimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\atendimento;

class AtendimentoController extends Controller
{
    public function index(){
        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO';

        $atendimentos = atendimento::where('dt_alta', null)
                                    ->with('paciente')
                                    ->get();

        return view('recepcao.atendimento.atendimento', compact('atendimentos', 'ds_pagina'));
    }

    public function create(atendimento $atendimentos){
        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO > PACIENTE > ATENDER';
        $cd_paciente = 1;//$insert->id;
        $nm_paciente = 'MARLUS';//$insert->nm_paciente;
        return view('recepcao.atendimento.atender', compact('ds_pagina','cd_paciente','nm_paciente'));
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

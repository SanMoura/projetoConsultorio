<?php

namespace App\Http\Controllers\recepcao\atendimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\atendimento;

class AtendimentoController extends Controller
{
    public function index(atendimento $atendimentos){
        $ds_pagina = 'CONSULTÓRIO > ATENDIMENTO';

        $atendimento = $atendimentos->all();

        return view('recepcao.atendimento.atendimento', compact('atendimento', 'ds_pagina'));
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

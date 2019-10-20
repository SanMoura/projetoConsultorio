<?php

namespace App\Http\Controllers\recepcao\atendimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\atendimento;

class AtendimentoController extends Controller
{
    public function index(atendimento $atendimentos){
        $ds_pagina = 'Atendimentos';

        $atendimento = $atendimentos->all();

        return view('recepcao.atendimento.atendimento', compact('atendimento', 'ds_pagina'));
    }
}

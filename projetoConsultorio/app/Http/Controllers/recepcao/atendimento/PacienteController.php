<?php

namespace App\Http\Controllers\recepcao\atendimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\paciente;

class PacienteController extends Controller
{
    public function search(Request $request, paciente $pacientes){
        $input = $request->all();
        $paciente = $pacientes->where('nm_paciente','like', $input)->get();
        
        /*foreach ($paciente as $pac) {
            return $pac->nm_paciente;
        }*/

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
        return view('recepcao.atendimento.atender', compact('ds_pagina','cd_paciente'));
    }
}

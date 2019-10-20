<?php

namespace App\Http\Controllers\recepcao\atendimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(Request $request){
        
        $input = $request->all();

        return $input;
    }
}

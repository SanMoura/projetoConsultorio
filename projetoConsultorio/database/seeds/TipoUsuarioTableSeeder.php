<?php

use Illuminate\Database\Seeder;
use App\Models\TipoUsuario;

class TipoUsuarioTableSeeder extends Seeder
{

    public function run()
    {
        $tipoUsuarios = [
            [
                'ds_tipo_usuario' => 'ADMINISTRADOR',
            ],
        ];

        foreach ($tipoUsuarios as $tipoUsuario) {
            
            TipoUsuario::create($tipoUsuario);

        }
    }
}

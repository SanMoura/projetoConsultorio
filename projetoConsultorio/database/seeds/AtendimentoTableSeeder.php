<?php

use Illuminate\Database\Seeder;
use App\Models\atendimento;

class AtendimentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atendimentos = [
            [
                'paciente_id' => 1,
                'dt_atendimento' => now(),
                'user_id_medico' => 2,
            ],
        ];

        foreach ($atendimentos as $atendimento) {
            
            atendimento::create($atendimento);

        }
    }
}

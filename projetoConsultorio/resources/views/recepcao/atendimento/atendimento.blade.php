@extends('layouts.app')

@section('content')
    @include('layouts.headers.padrao')

    <div class="container-fluid mt--7">
            <div class="row mt-5">
                    <div class="col-xl-12 mb-5 mb-xl-0">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Pacientes Agendados: 19/10/2019</h3>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-default">Novo Atendimento</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Atendimento</th>
                                            <th scope="col">Paciente</th>
                                            <th scope="col">Hora de chegada</th>
                                            <th scope="col">Convênio</th>
                                            <th scope="col">Médico</th>
                                            <th scope="col">Tipo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($atendimento as $row_atendimento)
                                            <tr>
                                                <th scope="row">
                                                    {{$row_atendimento->id}}
                                                </th>
                                                <td>
                                                    MARLUS SANTIAGO MOREIRA DE MOURA
                                                </td>
                                                <td>
                                                    {{date('H:i',strtotime($row_atendimento->dt_atendimento))}}
                                                </td>
                                                <td>
                                                    {{$row_atendimento->cd_convenio}}
                                                </td>
                                                <td>
                                                    Frederico Bezerra
                                                </td>
                                                <td>
                                                    Agendado
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <th scope="row" colspan="6">
                                                    Sem Resultados
                                                </th>
                                            </tr>
                                        @endforelse

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  
                </div>
        @include('layouts.footers.auth')
    </div>


       
  
@endsection

@push('js')
@endpush
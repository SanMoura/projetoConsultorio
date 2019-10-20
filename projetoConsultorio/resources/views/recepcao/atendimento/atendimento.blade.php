@extends('layouts.app')

@section('content')
    @include('layouts.headers.padrao')

    <div class="container-fluid mt--7">
            <div class="row">
                    <div class="col-xl-12 mb-5 mb-xl-0">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Pacientes Agendados: 19/10/2019</h3>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-default" data-toggle="modal" data-target="#novoAtendimento">Novo Atendimento</a>
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

    <!-- Modal novo Atendimento -->
    <div class="modal fade" id="novoAtendimento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Novo Atendimento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Primeiro pesquise se o paciente já tem cadastro.</p>
              <p><input type="text" name="" class="form-control" id="inputPesquisaPaciente" placeholder="cpf, rg, nome ou data de nascimento"></p>
              <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Paciente</th>
                            </tr>
                        </thead>
                        <tbody id="retornoPacientes">
                            <tr>
                                <td>Sem resultados</td>
                            </tr>                                
                        </tbody>
                    </table>    
               </div>              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-default">Pesquisar</button>
            </div>
          </div>
        </div>
      </div>      
  
@endsection

@push('js')
@endpush
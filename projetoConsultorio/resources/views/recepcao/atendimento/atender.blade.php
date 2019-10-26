@extends('layouts.app')

@section('content')
@include('layouts.headers.padrao')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">{{ __('Novo Atendimento') }}</h3>
                            <span class="mb-0">{{ $nm_paciente }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Informações da Consulta</h4>
                        <form method="post" action="{{ route('atendimento.store') }}" autocomplete="off">
                                @csrf
                            <div class="row">
                                <div class="col-md-2 mb-3">
                                    <label for="paciente_id">Paciente</label>
                                    <input type="text" class="form-control" name="paciente_id" placeholder="" value="{{$cd_paciente}}"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dt_nascimento">Médico</label>
                                    <select class="custom-select d-block w-100" name="user_id_medico" required>
                                        <option value="">Escolha...</option>
                                        <option value="1">Dr Frederico Bezerra</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="especialidade">Especialidade</label>
                                    <select class="custom-select d-block w-100" name="especialidade" required>
                                        <option value="">Escolha...</option>
                                        <option value="1">Obstetrícia</option>
                                    </select>
                                </div>
                            </div>
                            <h4 class="mb-3">Informações da data do atendimento</h4> 
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="mes">Mês</label>
                                    <select class="custom-select d-block w-100" name="mes" required>
                                        <option value="">Escolha...</option>
                                        <option value="1">Janeiro</option>
                                        <option value="1">Fevereiro</option>
                                        <option value="1">Março</option>
                                        <option value="1">Abril</option>
                                        <option value="1">Maio</option>
                                        <option value="1">Junho</option>
                                        <option value="1">Julho</option>
                                        <option value="1">Agosto</option>
                                        <option value="1">Setembro</option>
                                        <option value="1">Outubro</option>
                                        <option value="1">Novembro</option>
                                        <option value="1">Dezembro</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="dia">Dia</label>
                                    <select class="custom-select d-block w-100" name="dia" required>
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="hora">Horário</label>
                                    <select class="custom-select d-block w-100" name="hora" required>
                                        @for ($i = 8; $i <= 16; $i++)
                                            <option value="{{$i}}">{{$i}}:00h</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <h4 class="mb-3">Informações do Plano</h4> 
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="carteira">Carteira</label>
                                    <input type="text" class="form-control" name="carteira" placeholder="" value=""
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="ds_convenio">Convênio</label>
                                    <input type="text" class="form-control" name="ds_convenio" placeholder="" value=""
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="ds_plano">Plano</label>
                                    <input type="text" class="form-control" name="ds_plano" placeholder="" value=""
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <button class="btn btn-default btn-lg btn-block" type="submit">Confirmar Atendimento</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.footers.auth')
</div>

@endsection

@push('js')
@endpush
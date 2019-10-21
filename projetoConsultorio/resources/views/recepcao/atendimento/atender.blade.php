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
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Informações Pessoais</h4>
                        <form method="post" action="{{ route('pacientes.store') }}" autocomplete="off">
                                @csrf
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="nm_paciente">Paciente</label>
                                    <input type="text" class="form-control" name="nm_paciente" placeholder="" value="{{$cd_paciente}}"
                                        required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="dt_nascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control" name="dt_nascimento" placeholder="" value=""
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="CPF">CPF</label>
                                    <input type="text" class="form-control" name="cpf" placeholder="" value=""
                                        required>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="rg">RG</label>
                                    <input type="text" class="form-control" name="rg" placeholder="" value=""
                                        required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="sexo">Sexo</label>
                                    <select class="custom-select d-block w-100" name="sexo" required>
                                        <option value="">Escolha...</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="O">Outro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                                    <input type="text" class="form-control" name="email" placeholder="" value=""
                                        required>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="fone_primario">Celular</label>
                                    <input type="text" class="form-control" name="fone_primario" placeholder="" value=""
                                        required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="fone_secundario">Outro Telefone <span
                                            class="text-muted">(Opcional)</span></label>
                                    <input type="text" class="form-control" name="fone_secundario" placeholder="" value=""
                                        required>
                                </div>
                            </div>

                            <h4 class="mb-3">Informações Demográficas</h4>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep" placeholder="" value=""
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" name="endereco" placeholder="" value=""
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="cidade">Cidade </label>
                                    <input type="text" class="form-control" name="cidade" placeholder="" value=""
                                        required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" name="bairro" placeholder="" value=""
                                        required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="complemento">Complemento <span class="text-muted">(Opcional)</span></label>
                                    <input type="text" class="form-control" name="complemento" placeholder="" value=""
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
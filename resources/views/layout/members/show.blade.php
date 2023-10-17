@extends('layout.main')

@section('content')
<div class="account-settings-container layout-top-spacing pt-4">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="general-info" class="section general-info">
                        <div class="info">
                            <h6 class="">Informações Pessoais</h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                            <div class="upload mt-4 pr-md-4">
                                                <img src="{{ asset('img/members/'. $member->foto_perfil)}}" alt="{{ $member->name }}" width="100%">

                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                            <p class="font-weight-bold">Nome Completo:</p>
                                                            <p>{{ $member->name }}</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="font-weight-bold">Data de Nascimento:</p>
                                                            <p>{{ date('d/m/Y', strtotime($member->data_nascimento))  }}</p>

                                                    </div>

                                                    <div class="col-sm-6 mt-3">

                                                            <p class="font-weight-bold">CPF:</p>
                                                            <p>{{ $member->cpf }}</p>

                                                    </div>
                                                    <div class="col-sm-6 mt-3">
                                                            <p class="font-weight-bold">E-mail:</p>
                                                            <p>{{ $member->email }}</p>

                                                    </div>
                                                    <div class="col-sm-6 mt-3">

                                                        <p class="font-weight-bold">Telefone Fixo:</p>
                                                        <p>{{ $member->telefone_fixo }}</p>

                                                </div>
                                                <div class="col-sm-6 mt-3">

                                                    <p class="font-weight-bold">Celular/WhatsApp:</p>
                                                    <p>{{ $member->celular }}</p>

                                            </div>
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12 mt-3">
                                                                <p class="font-weight-bold">Endereço:</p>
                                                                <p>{{ $member->endereco }}</p>
                                                            </div>
                                                            <div class="col-sm-6 mt-3">
                                                                <p class="font-weight-bold">Cidade:</p>
                                                                <p>{{ $member->cidade }}</p>
                                                            </div>
                                                            <div class="col-sm-4 mt-3">
                                                                <p class="font-weight-bold">Estado:</p>
                                                                <p>{{ $member->estado }}</p>
                                                            </div>
                                                            <div class="col-sm-2 mt-3">
                                                                <p class="font-weight-bold">CEP:</p>
                                                                <p>{{ $member->cep }}</p>
                                                             </div>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="contact" class="section contact">
                        <div class="info">
                            <h5 class="">Informações Membresia</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <p class="font-weight-bold">Exerce alguma cargo na eclesiástico?</p>
                                                <p>
                                                    @switch($member->cargo)
                                                    @case('presbitero')
                                                        Presbítero
                                                        @break
                                                    @case('pastor')
                                                        Pastor / Pastora
                                                        @break
                                                    @case('missionario')
                                                        Missionário / Missionária
                                                        @break
                                                    @case('evengelista')
                                                        Evangelista
                                                        @break
                                                    @case('diacono')
                                                        Diácono / Diaconisa
                                                        @break
                                                    @case('obreiro')
                                                        Obreiro / Obreira
                                                        @break
                                                    @case('membro')
                                                        Membro
                                                        @break
                                                    @default

                                                @endswitch
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="font-weight-bold">Participa de alguma Ministério/Departamento ?</p>
                                                @foreach ($member->departamentos as $departamento)

                                                @switch($departamento)
                                                    @case('colunas_da_fe')
                                                            Colunas da Fé
                                                        @break
                                                    @case('intercessao')
                                                        Intercessão
                                                        @break
                                                    @case('jovens')
                                                        Jovens
                                                        @break
                                                    @case('sal_da_terra')
                                                        Sal da Terra
                                                        @break
                                                    @case('luz_do_mundo')
                                                        Luz do Mundo
                                                        @break
                                                    @case('louvor')
                                                        Louvor
                                                        @break
                                                    @case('sacerdotes_do_senhor')
                                                        Sacerdotes do Senhor
                                                        @break
                                                    @default
                                                        Nenhum departamento

                                                @endswitch

                                            @endforeach
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="font-weight-bold">Data de Membresia:</p>
                                            <p>{{ date('d/m/Y', strtotime($member->data_membresia))  }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="contact" class="section contact">
                        <div class="info">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <a href="{{ route('members.index')}}" class="btn btn-primary">Voltar</a>
                                    <a href="{{ route('members.edit', $member->id)}}" class="btn btn-success">Editar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection

@push('page-level-scripts')
<script>
    $(document).ready(function(){
        $("#telefone-fixo").inputmask({mask:"(99) 9999-9999"});
        $("#celular").inputmask({mask:"(99) 99999-9999"});
        $('#cep').inputmask("99999-999");
        $('#cpf').inputmask("999.999.999-99");

    });
</script>
<script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('plugins/blockui/jquery.blockUI.min.js') }}"></script>
<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
<script src="{{ asset('assets/js/users/account-settings.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/input-mask/input-mask.js') }}"></script>
<script src="{{ asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>

@endpush

@push('page-level-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
<link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css')}}">

@endpush

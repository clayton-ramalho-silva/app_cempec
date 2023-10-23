@extends('layout.main')

@section('content')

<div class="account-settings-container layout-top-spacing pt-4">
<form action="{{route('members.update', $member->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                {{-- Informações Pessoais --}}
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="general-info" class="section general-info">
                        <div class="info">
                            <h6 class="">Editar Informações Pessoais</h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                            <div class="upload mt-4 pr-md-4">
                                                <input name="foto_perfil" type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ asset('img/members/'.$member->foto_perfil) }}" data-max-file-size="2M" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Foto</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name">Nome completo</label>
                                                            <input name="name" type="text" class="form-control mb-4" id="name" value="{{ $member->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="dob-input">Data de Nascimento</label>
                                                        <div class="d-sm-flex d-block">
                                                            <div class="form-group mr-1">
                                                                <input type="date" name="data_nascimento" id="" class="form-control" value="{{ $member->data_nascimento  }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cpf">CPF</label>
                                                            <input name="cpf" type="text" class="form-control mb-4" id="cpf" value="{{ $member->cpf }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email">E-mail</label>
                                                            <input name="email" type="text" class="form-control mb-4" id="email" value="{{ $member->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="telefone">Telefone Fixo</label>
                                                            <input type="text" class="form-control mb-4" name="telefone_fixo" id="telefone-fixo" value="{{ $member->telefone_fixo }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="celular">Celular/WhatsApp</label>
                                                            <input type="text" class="form-control mb-4" name="celular" id="celular" value="{{ $member->celular }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-4">
                                                            <label for="inputAddress">Endereço</label>
                                                            <input type="text" class="form-control" name="endereco" id="inputAddress" value="{{ $member->endereco }}">
                                                        </div>
                                                        <div class="form-row mb-4">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCity">Cidade</label>
                                                                <input type="text" class="form-control" name="cidade" id="inputCity" value="{{ $member->cidade }}">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputState">Estado</label>
                                                                <select name="estado" id="inputState" class="form-control">
                                                                    <option value="SP" {{ $member->estado == 'SP' ? 'selected' : '' }} >SP</option>
                                                                    <option value="AC" {{ $member->estado == 'AC' ? 'selected' : '' }} >AC</option>
                                                                    <option value="AL" {{ $member->estado == 'AL' ? 'selected' : '' }} >AL</option>
                                                                    <option value="AP" {{ $member->estado == 'AP' ? 'selected' : '' }} >AP</option>
                                                                    <option value="AM" {{ $member->estado == 'AM' ? 'selected' : '' }} >AM</option>
                                                                    <option value="BA" {{ $member->estado == 'BA' ? 'selected' : '' }} >BA</option>
                                                                    <option value="CE" {{ $member->estado == 'CE' ? 'selected' : '' }} >CE</option>
                                                                    <option value="DF" {{ $member->estado == 'DF' ? 'selected' : '' }} >DF</option>
                                                                    <option value="ES" {{ $member->estado == 'ES' ? 'selected' : '' }} >ES</option>
                                                                    <option value="GO" {{ $member->estado == 'GO' ? 'selected' : '' }} >GO</option>
                                                                    <option value="MA" {{ $member->estado == 'MA' ? 'selected' : '' }} >MA</option>
                                                                    <option value="MT" {{ $member->estado == 'MT' ? 'selected' : '' }} >MT</option>
                                                                    <option value="MS" {{ $member->estado == 'MS' ? 'selected' : '' }} >MS</option>
                                                                    <option value="MG" {{ $member->estado == 'MG' ? 'selected' : '' }} >MG</option>
                                                                    <option value="PA" {{ $member->estado == 'PA' ? 'selected' : '' }} >PA</option>
                                                                    <option value="PB" {{ $member->estado == 'PB' ? 'selected' : '' }} >PB</option>
                                                                    <option value="PR" {{ $member->estado == 'PR' ? 'selected' : '' }} >PR</option>
                                                                    <option value="PE" {{ $member->estado == 'PE' ? 'selected' : '' }} >PE</option>
                                                                    <option value="PI" {{ $member->estado == 'PI' ? 'selected' : '' }} >PI</option>
                                                                    <option value="RJ" {{ $member->estado == 'RJ' ? 'selected' : '' }} >RJ</option>
                                                                    <option value="RN" {{ $member->estado == 'RN' ? 'selected' : '' }} >RN</option>
                                                                    <option value="RS" {{ $member->estado == 'RS' ? 'selected' : '' }} >RS</option>
                                                                    <option value="RO" {{ $member->estado == 'RO' ? 'selected' : '' }} >RO</option>
                                                                    <option value="RR" {{ $member->estado == 'RR' ? 'selected' : '' }} >RR</option>
                                                                    <option value="SC" {{ $member->estado == 'SC' ? 'selected' : '' }} >SC</option>
                                                                    <option value="SE" {{ $member->estado == 'SE' ? 'selected' : '' }} >SE</option>
                                                                    <option value="TO" {{ $member->estado == 'TO' ? 'selected' : '' }} >TO</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="cep">CEP</label>
                                                                <input type="text" class="form-control" name="cep" id="cep" value="{{ $member->cep }}">
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


                {{-- Informações Membresia --}}
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="contact" class="section contact">
                        <div class="info">
                            <h5 class="">Editar Informações Membresia</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        {{-- Cargo eclesiastico --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cargo">Exerce algum cargo administrativo?</label>
                                                <select name="cargo" class="form-control" id="country">
                                                    <option value="pastor" {{$member->cargo == 'pastor'? 'selected' : ''}} >Pastor/Pastora</option>
                                                    <option value="missionario" {{$member->cargo == 'missionario'? 'selected' : ''}} >Missionário/Missionária</option>
                                                    <option value="presbitero" {{$member->cargo == 'presbitero'? 'selected' : ''}} >Presbítero</option>
                                                    <option value="evengelista" {{$member->cargo == 'evengelista'? 'selected' : ''}} >Evangelista</option>
                                                    <option value="diacono" {{$member->cargo == 'diacono'? 'selected' : ''}} >Diácono/Diaconisa</option>
                                                    <option value="obreiro" {{$member->cargo == 'obreiro'? 'selected' : ''}} >Obreiro/Obreira</option>
                                                    <option value="membro" {{$member->cargo == 'membro'? 'selected' : ''}} >Membro</option>

                                                </select>
                                            </div>
                                        </div>

                                        {{-- Ministerio ou Departamento --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="departamento">Participa algum Ministério/Departamento?</label>
                                                <select name="departamentos[]" class="form-control selectpicker" multiple>


                                                    @foreach ($member->departamentos as $departamento )
                                                    <option value="{{ $departamento }}" {{ in_array($departamento, $member->departamentos) ? 'selected' : ''  }}>
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

                                                    </option>

                                                   @endforeach


                                                </select>
                                            </div>
                                        </div>

                                        {{-- Cargo Administrativo --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cargo_admin">Exerce algum cargo administrativo?</label>
                                                <select name="cargo_admin" class="form-control" id="country">
                                                    <option value="presidente" {{$member->cargo_admin == 'presidente'? 'selected' : ''}} >Pastor Presidente</option>
                                                    <option value="vice-presitente" {{$member->cargo_admin == 'vice-presitente'? 'selected' : ''}} >Vice-presidente</option>
                                                    <option value="secretaria" {{$member->cargo_admin == 'secretaria'? 'selected' : ''}} >Secretária</option>
                                                    <option value="tesoureiro" {{$member->cargo_admin == 'tesoureiro'? 'selected' : ''}} >Tesoureiro</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Data membresia --}}
                                        <div class="col-sm-6">
                                            <label class="dob-input">Data de Membresia</label>
                                            <div class="d-sm-flex d-block">
                                                <div class="form-group mr-1">
                                                    <input type="date" name="data_membresia" id="" class="form-control" value="{{ $member->data_membresia }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Salvar --}}
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="contact" class="section contact">
                        <div class="info">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" id="multiple-messages" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</form>
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

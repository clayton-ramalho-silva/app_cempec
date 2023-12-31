@extends('layout.main')

@section('content')

<div class="account-settings-container layout-top-spacing pt-4">
<form action="{{route('members.store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                {{-- Informações Pessoais --}}
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="general-info" class="section general-info">
                        <div class="info">
                            <h6 class="">Informações Pessoais</h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                            <div class="upload mt-4 pr-md-4">
                                                <input name="foto_perfil" type="file" id="input-file-max-fs" class="dropify" data-default-file="{{asset('assets/img/200x200.jpg')}}" data-max-file-size="2M" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Foto</p>
                                                @error('foto_perfil') <div class="alert alert-danger">{{ $message }}</div> @enderror

                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name">Nome completo</label>
                                                            <input name="name" type="text" class="form-control mb-4" id="name" placeholder="" value="{{ old('name')}}">
                                                            @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="dob-input">Data de Nascimento</label>
                                                        <div class="d-sm-flex d-block">
                                                            <div class="form-group mr-1">
                                                                <input type="date" name="data_nascimento" id="" class="form-control" value="{{ old('data_nascimento')}}">
                                                                @error('data_nascimento') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cpf">CPF</label>
                                                            <input name="cpf" type="text" class="form-control mb-4" id="cpf" placeholder="" value="{{ old('cpf') }}">
                                                            @error('cpf') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email">E-mail</label>
                                                            <input name="email" type="text" class="form-control mb-4" id="email" placeholder="" value="{{ old('email')}}">
                                                            @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="telefone">Telefone Fixo</label>
                                                            <input type="text" class="form-control mb-4" name="telefone_fixo" id="telefone-fixo" placeholder="" value="{{ old('telefone_fixo')}}">
                                                            @error('telefone_fixo') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="celular">Celular/WhatsApp</label>
                                                            <input type="text" class="form-control mb-4" name="celular" id="celular" placeholder="" value="{{ old('celular')}}">
                                                            @error('celular') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-4">
                                                            <label for="inputAddress">Endereço</label>
                                                            <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Rua/Avenida" value="{{ old('endereco')}}">
                                                            @error('endereco') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                        </div>
                                                        <div class="form-row mb-4">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCity">Cidade</label>
                                                                <input type="text" class="form-control" name="cidade" id="inputCity" value="{{ old('cidade')}}">
                                                                @error('cidade') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputState">Estado</label>
                                                                <select name="estado" id="inputState" class="form-control">
                                                                    <option selected>SP</option>
                                                                    <option>AC</option>
                                                                    <option>AL</option>
                                                                    <option>AP</option>
                                                                    <option>AM</option>
                                                                    <option>BA</option>
                                                                    <option>CE</option>
                                                                    <option>DF</option>
                                                                    <option>ES</option>
                                                                    <option>GO</option>
                                                                    <option>MA</option>
                                                                    <option>MT</option>
                                                                    <option>MS</option>
                                                                    <option>MG</option>
                                                                    <option>PA</option>
                                                                    <option>PB</option>
                                                                    <option>PR</option>
                                                                    <option>PE</option>
                                                                    <option>PI</option>
                                                                    <option>RJ</option>
                                                                    <option>RN</option>
                                                                    <option>RS</option>
                                                                    <option>RO</option>
                                                                    <option>RR</option>
                                                                    <option>SC</option>
                                                                    <option>SE</option>
                                                                    <option>TO</option>
                                                                </select>
                                                                @error('estado') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="cep">CEP</label>
                                                                <input type="text" class="form-control" name="cep" id="cep" value="{{ old('cep')}}">
                                                                @error('cep') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
                            <h5 class="">Informações Membresia</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        {{-- Cargo Eclesiástico --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cargo">Exerce algum cargo eclesiástico?</label>
                                                <select name="cargo" class="form-control" id="country">
                                                    <option selected>Cargo</option>
                                                    <option value="pastor" {{ old('cargo') == 'pastor' ? 'selected' : '' }} >Pastor/Pastora</option>
                                                    <option value="missionario" {{ old('cargo') == 'missionario' ? 'selected' : '' }}>Missionário/Missionária</option>
                                                    <option value="presbitero" {{ old('cargo') == 'presbitero' ? 'selected' : '' }}>Presbítero</option>
                                                    <option value="evengelista" {{ old('cargo') == 'evengelista' ? 'selected' : '' }}>Evangelista</option>
                                                    <option value="diacono" {{ old('cargo') == 'diacono' ? 'selected' : '' }}>Diácono/Diaconisa</option>
                                                    <option value="obreiro" {{ old('cargo') == 'obreiro' ? 'selected' : '' }}>Obreiro/Obreira</option>
                                                    <option value="membro" {{ old('cargo') == 'membro' ? 'selected' : '' }}>Membro</option>

                                                </select>
                                                @error('cargo') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>

                                        {{-- Ministério/Departamento --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="departamento">Participa algum Ministério/Departamento?</label>
                                                <select name="departamentos[]" class="form-control selectpicker" multiple>
                                                    <option value="nao" selected>Escolha um Departamento ou Ministério</option>
                                                    <option value="louvor">Ministério Louvor</option>
                                                    <option value="sal_da_terra" >Sal da Terra</option>
                                                    <option value="luz_do_mundo">Luz do Mundo</option>
                                                    <option value="colunas_da_fe">Colunas da Fé</option>
                                                    <option value="intercessao">Intercessão</option>
                                                    <option value="jovens">Jovens</option>
                                                    <option value="sacerdotes_do_senhor">Sacerdotes do Senhor</option>
                                                </select>
                                                @error('departamento') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>

                                        {{-- Cargo Administrativo --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cargo_admin">Exerce algum cargo administrativo?</label>
                                                <select name="cargo_admin" class="form-control" id="country">
                                                    <option selected>Cargo</option>
                                                    <option value="presidente" {{ old('cargo_admin') == 'presidente' ? 'selected' : '' }}>Pastor Presidente</option>
                                                    <option value="vice-presitente" {{ old('cargo_admin') == 'vice-presitente' ? 'selected' : '' }}>Vice-presidente</option>
                                                    <option value="secretaria" {{ old('cargo_admin') == 'secretaria' ? 'selected' : '' }}>Secretária</option>
                                                    <option value="tesoureiro" {{ old('cargo_admin') == 'tesoureiro' ? 'selected' : '' }}>Tesoureiro</option>
                                                </select>
                                                @error('cargo_admin') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>

                                        {{-- Data membresia --}}
                                        <div class="col-sm-6">
                                            <label class="dob-input">Data de Membresia</label>
                                            <div class="d-sm-flex d-block">
                                                <div class="form-group mr-1">
                                                    <input type="date" name="data_membresia" id="" class="form-control" value="{{ old('data_membresia') }}">
                                                    @error('data_membresia') <div class="alert alert-danger">{{ $message }}</div> @enderror
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

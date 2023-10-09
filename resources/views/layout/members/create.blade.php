@extends('layout.main')

@section('content')

<div class="account-settings-container layout-top-spacing pt-4">
<form action="{{route('members.store')}}" method="post" enctype="multipart/form-data">
@csrf
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
                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="assets/img/200x200.jpg" data-max-file-size="2M" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Foto</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name">Nome completo</label>
                                                            <input type="text" class="form-control mb-4" id="name" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="dob-input">Data de Nascimento</label>
                                                        <div class="d-sm-flex d-block">
                                                            <div class="form-group mr-1">
                                                                <select name="data-dia" class="form-control" id="exampleFormControlSelect1">
                                                                  <option>Dia</option>
                                                                  <option>1</option>
                                                                  <option>2</option>
                                                                  <option>3</option>
                                                                  <option>4</option>
                                                                  <option>5</option>
                                                                  <option>6</option>
                                                                  <option>7</option>
                                                                  <option>8</option>
                                                                  <option>9</option>
                                                                  <option>10</option>
                                                                  <option>11</option>
                                                                  <option>12</option>
                                                                  <option>13</option>
                                                                  <option>14</option>
                                                                  <option>15</option>
                                                                  <option>16</option>
                                                                  <option>17</option>
                                                                  <option>18</option>
                                                                  <option>19</option>
                                                                  <option>20</option>
                                                                  <option>21</option>
                                                                  <option>22</option>
                                                                  <option>23</option>
                                                                  <option>24</option>
                                                                  <option>25</option>
                                                                  <option>26</option>
                                                                  <option>27</option>
                                                                  <option>28</option>
                                                                  <option>29</option>
                                                                  <option>30</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mr-1">
                                                                <select name="data-mes" class="form-control" id="month">
                                                                    <option>Mês</option>
                                                                    <option>Jan</option>
                                                                    <option>Fev</option>
                                                                    <option>Mar</option>
                                                                    <option>Abr</option>
                                                                    <option>Mai</option>
                                                                    <option>Jun</option>
                                                                    <option>Jul</option>
                                                                    <option>Ago</option>
                                                                    <option>Set</option>
                                                                    <option>Out</option>
                                                                    <option>Nov</option>
                                                                    <option>Dez</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mr-1">
                                                                <select name="data-ano" class="form-control" id="year">
                                                                  <option>Ano</option>
                                                                  <option>2023</option>
                                                                  <option>2022</option>
                                                                  <option>2021</option>
                                                                  <option>2020</option>
                                                                  <option>2019</option>
                                                                  <option>2018</option>
                                                                  <option>2017</option>
                                                                  <option>2016</option>
                                                                  <option>2015</option>
                                                                  <option>2014</option>
                                                                  <option>2013</option>
                                                                  <option>2012</option>
                                                                  <option>2011</option>
                                                                  <option>2010</option>
                                                                  <option>2009</option>
                                                                  <option>2008</option>
                                                                  <option>2007</option>
                                                                  <option>2006</option>
                                                                  <option>2005</option>
                                                                  <option>2004</option>
                                                                  <option>2003</option>
                                                                  <option>2002</option>
                                                                  <option>2001</option>
                                                                  <option>2000</option>
                                                                  <option>1999</option>
                                                                  <option>1998</option>
                                                                  <option>1997</option>
                                                                  <option>1996</option>
                                                                  <option>1995</option>
                                                                  <option>1994</option>
                                                                  <option>1993</option>
                                                                  <option>1992</option>
                                                                  <option>1991</option>
                                                                  <option>1990</option>
                                                                  <option>1989</option>
                                                                  <option>1988</option>
                                                                  <option>1987</option>
                                                                  <option>1986</option>
                                                                  <option>1985</option>
                                                                  <option>1984</option>
                                                                  <option>1983</option>
                                                                  <option>1982</option>
                                                                  <option>1981</option>
                                                                  <option>1980</option>
                                                                  <option>1979</option>
                                                                  <option>1978</option>
                                                                  <option>1977</option>
                                                                  <option>1976</option>
                                                                  <option>1975</option>
                                                                  <option>1974</option>
                                                                  <option>1973</option>
                                                                  <option>1972</option>
                                                                  <option>1971</option>
                                                                  <option>1970</option>
                                                                  <option>1969</option>
                                                                  <option>1968</option>
                                                                  <option>1967</option>
                                                                  <option>1966</option>
                                                                  <option>1965</option>
                                                                  <option>1964</option>
                                                                  <option>1963</option>
                                                                  <option>1962</option>
                                                                  <option>1961</option>
                                                                  <option>1960</option>
                                                                  <option>1959</option>
                                                                  <option>1958</option>
                                                                  <option>1957</option>
                                                                  <option>1956</option>
                                                                  <option>1955</option>
                                                                  <option>1954</option>
                                                                  <option>1953</option>
                                                                  <option>1952</option>
                                                                  <option>1951</option>
                                                                  <option>1950</option>
                                                                  <option>1949</option>
                                                                  <option>1948</option>
                                                                  <option>1947</option>
                                                                  <option>1946</option>
                                                                  <option>1945</option>
                                                                  <option>1944</option>
                                                                  <option>1943</option>
                                                                  <option>1942</option>
                                                                  <option>1941</option>
                                                                  <option>1940</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cpf">CPF</label>
                                                            <input name="cpf" type="text" class="form-control mb-4" id="cpf" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email">E-mail</label>
                                                            <input name="email" type="text" class="form-control mb-4" id="email" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="telefone">Telefone Fixo</label>
                                                            <input type="text" class="form-control mb-4" name="telefone-fixo" id="telefone-fixo" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="celular">Celular/WhatsApp</label>
                                                            <input type="text" class="form-control mb-4" name="celular" id="celular" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-4">
                                                            <label for="inputAddress">Endereço</label>
                                                            <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Rua/Avenida">
                                                        </div>
                                                        <div class="form-row mb-4">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCity">Cidade</label>
                                                                <input type="text" class="form-control" name="cidade" id="inputCity">
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
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="cep">CEP</label>
                                                                <input type="text" class="form-control" name="cep" id="cep">
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
                                            <div class="form-group">
                                                <label for="cargo">Exerce algum cargo?</label>
                                                <select name="cargo" class="form-control" id="country">
                                                    <option selected>Cargo</option>
                                                    <option value="pastor">Pastor/Pastora</option>
                                                    <option value="missionario">Missionário/Missionária</option>
                                                    <option value="presbitero">Presbítero</option>
                                                    <option value="diacono">Diácono/Diaconisa</option>
                                                    <option value="obreiro">Obreiro/Obreira</option>
                                                    <option value="voluntario">Voluntário</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="departamento">Participa algum Ministério/Departamento?</label>
                                                <select name="departamento" class="form-control" id="country">
                                                    <option selected>Ministério / Departamento</option>
                                                    <option value="louvor">Ministério Louvor</option>
                                                    <option value="sal_da_terra">Sal da Terra</option>
                                                    <option value="luz_do_mundo">Luz do Mundo</option>
                                                    <option value="colunas_da_fe">Colunas da Fé</option>
                                                    <option value="intercessao">Intercessão</option>
                                                    <option value="jovens">Jovens</option>
                                                    <option value="sacerdotes_do_senhor">Sacerdotes do Senhor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="dob-input">Data de Membresia</label>
                                            <div class="d-sm-flex d-block">
                                                <div class="form-group mr-1">
                                                    <select name="membresia-dia" class="form-control" id="exampleFormControlSelect1">
                                                      <option>Dia</option>
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                      <option>6</option>
                                                      <option>7</option>
                                                      <option>8</option>
                                                      <option>9</option>
                                                      <option>10</option>
                                                      <option>11</option>
                                                      <option>12</option>
                                                      <option>13</option>
                                                      <option>14</option>
                                                      <option>15</option>
                                                      <option>16</option>
                                                      <option>17</option>
                                                      <option>18</option>
                                                      <option>19</option>
                                                      <option>20</option>
                                                      <option>21</option>
                                                      <option>22</option>
                                                      <option>23</option>
                                                      <option>24</option>
                                                      <option>25</option>
                                                      <option>26</option>
                                                      <option>27</option>
                                                      <option>28</option>
                                                      <option>29</option>
                                                      <option>30</option>
                                                      <option>31</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mr-1">
                                                    <select name="membresia-mes" class="form-control" id="month">
                                                        <option>Mês</option>
                                                        <option>Jan</option>
                                                        <option>Fev</option>
                                                        <option>Mar</option>
                                                        <option>Abr</option>
                                                        <option>Mai</option>
                                                        <option>Jun</option>
                                                        <option>Jul</option>
                                                        <option>Ago</option>
                                                        <option>Set</option>
                                                        <option>Out</option>
                                                        <option>Nov</option>
                                                        <option>Dez</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mr-1">
                                                    <select name="membresia-ano" class="form-control" id="year">
                                                      <option>Ano</option>
                                                      <option>2023</option>
                                                      <option>2022</option>
                                                      <option>2021</option>
                                                      <option>2020</option>
                                                      <option>2019</option>
                                                      <option>2018</option>
                                                      <option>2017</option>
                                                      <option>2016</option>
                                                      <option>2015</option>
                                                      <option>2014</option>
                                                      <option>2013</option>
                                                      <option>2012</option>
                                                      <option>2011</option>
                                                      <option>2010</option>
                                                      <option>2009</option>
                                                    </select>
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
        $('#cep').inputmask("99-9999999");

    });
</script>
<script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('plugins/blockui/jquery.blockUI.min.js') }}"></script>
<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
<script src="{{ asset('assets/js/users/account-settings.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/input-mask/input-mask.js') }}"></script>
@endpush

@push('page-level-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
<link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
@endpush

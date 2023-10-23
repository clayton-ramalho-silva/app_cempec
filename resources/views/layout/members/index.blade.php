@extends('layout.main')

@section('content')
<div class="row layout-top-spacing" id="cancel-row">


    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-2">

        <div class="widget-content widget-content-area br-6 p-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('members.create') }}" class="btn btn-primary">Adcionar Membro</a>
            <div class="d-flex align-items-center">
                <h6 class="m-0">Total Membros:</h6>
                <h5 class="m-0 ml-2 ">{{ $members->count()}}</h5>
            </div>

        </div>

        <div class="widget-content widget-content-area br-6 mt-2">

            <table id="zero-config" class="table table-striped" style="width:100%">
                <thead>

                    <tr>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Departamentos</th>
                        <th>Data Nasc.</th>
                        <th>Data Membr.</th>
                        <th class="no-content">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td>
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
                            </td>
                            <td>
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
                            </td>
                            <td>{{ date('d/m/Y', strtotime($member->data_nascimento)) }}</td>
                            <td>{{ date('d/m/Y', strtotime($member->data_membresia)) }}</td>
                            <td>
                                <a href="{{ route('members.show', $member->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye table-cancel"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </a>
                                <a href="{{ route('members.edit', $member->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 table-cancel"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                </a>
                                <svg data-toggle="modal" data-id="{{$member->id }}" data-target="#modal-delete-membro" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                {{-- Modal Delete --}}
                                <div id="modal-delete-membro" class="modal fade bd-example-modal-sm" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="mySmallModalLabel">Deletar Membro</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="modal-text">Tem certeza que deseja deletar? </p>
                                                <p class="modal-text"><strong>{{ $member->name }}</strong> </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                                <form action="{{ route('members.destroy', data-id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Departamentos</th>
                        <th>Data Nasc.</th>
                        <th>Data Membr.</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>
@endsection


@push('page-level-scripts')
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/apps/contact.js') }}"></script>
<script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
<script>
    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Mostrando página _PAGE_ de _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Buscar...",
           "sLengthMenu": "Resultados :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });


    $('#modal-delete-membro')
</script>
@endpush

@push('page-level-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
 <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/apps/contacts.css') }}" rel="stylesheet" type="text/css" />
@endpush

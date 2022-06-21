@extends('layout.sisdpta')
@section('conteudo')
@include('processo.processo_header')
@include('processo.processo_search')

<div class="card">
    <div class="card-header">
        <h5>Listagem de processos</h5>
        <span>Total de:<code>{{ $processos->count()}}</code>Processos</span>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-right">
                                <input class="form-check-input" type="checkbox" id="selectTodos" onclick="select_todos()">
                            </th>
                            <th>Nº de Processo</th>
                            <th>Requerente/Entidade</th>
                            <th>Recorrido/Ex.Económico</th>
                            <th>Espécie</th>
                            <th>Juiz Relator</th>
                            <th>Parecer</th>
                            <th class="text-center">Acção</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($processos as $processo)
                        <tr>
                            <td class="text-right">
                                <input class="checkItem" type="checkbox" id="{{ $processo->id }}" name="list_cbx[]">
                            </td>
                            <td>{{ $processo->num_processo }}</td>
                            <td>{{ $processo->requerrente }}</td>
                            <td>{{ $processo->recorrido }}</td>
                            <td>{{ $processo->especie ? $processo->especie->nome : '' }}</td>
                            <td>{{ $processo->juiz_id }}</td>
                            <td>{{ $processo->despacho_id }}</td>
                            <!-- BOTAO PARA VISUALIZAR -->
                            <td class="text-right" >
                                <a class="btn btn-outline-secondary" href="{{ route('processo.processo_details', $processo->id)}}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <!-- BOTAO PARA EDITAR -->
                                <a class="btn btn-outline-primary" href="{{ route('processo.processo_edit', $processo->id)}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- BOTAO PARA APAGAR -->
                            </td>
                        </tr>
                        @empty
                        <tr>
                    <div class="bg-danger text-center">
                        <i class="fas fa-exclamation-triangle"></i> 
                        Processo não encontrado! ou número incorrecto.
                    </div>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{ $processos->onEachSide(0)->links() }}


@push('select_todos')
<script>
    function select_todos() {
        if (jQuery('#selectTodos').prop("checked")) {
            jQuery('input[type=checkbox]').each(function () {
                jQuery('#' + this.id).prop('checked', true);
            });
        } else {
            jQuery('input[type=checkbox]').each(function () {
                jQuery('#' + this.id).prop('checked', false);
            });
        }

    }
</script>
@endpush

@push('editar_tabela')
<script type="text/javascript">
    $(document).ready(function(){
        headers:{
            'X-CSRF-Token' : $("input[name=_token]").val()
        }
    });
    $('#editable').Tableedit();
    
    
</script>
@endpush

@endsection  
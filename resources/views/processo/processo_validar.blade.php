@extends('layout.sisdpta')
@section('conteudo')
@include('processo.processo_header_validar')


<form class="from-horizontal" method="get" id="processo_validar" action="{{ route('processo.search')}}">
    @csrf
    <div class="row">
        <div class="col-sm input-group form">
            <input class="form-control" placeholder="Insira o número de processo a pesquisar" aria-label="" id="search" type="search" name="search" value="{{ request()->query('search')}}" />                          
            <button type="submit" class="btn btn-primary" autofocus="">
                <i class="fas fa-search"></i> Pesquisar
            </button>
        </div>
    </div>
</form>

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
                                <input class="form-check-input" type="checkbox" id="selectTodos" value="" name=""></th>
                            <th>Nº de Processo</th>
                            <th>Requerente/Entidade</th>
                            <th>Especie</th>
                            <th>Recorrido</th>
                            <th>Parecer</th>
                            <th class="text-center">Acção</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($processos as $processo)
                        <tr>
                            <td class="text-right">
                                <input class="checkItem " type="checkbox" value="{{ $processo->id}}" id="selectUm" name="selecionado[]">
                            </td>
                            <td>{{ $processo->num_processo }}</td>
                            <td>{{ $processo->requerrente }}</td>
                            <td>{{ $processo->especie ? $processo->especie->nome : '' }}</td>
                            <td>{{ $processo->recorrido }}</td>
                            <td> Estado</td>
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

@push('processoselect')
<script type="text/javascript">
    $(document).ready(function(){
    $("#selectTodos").select('select', function())
    alert('Ola Pais');
            return;
</script>
@endpush
@endsection  
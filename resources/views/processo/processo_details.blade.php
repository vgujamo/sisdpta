@extends('layout.sisdpta')
@section('conteudo')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-list bg-c-pink"></i>
                <div class="d-inline">
                    <h4>Detalhes do Processo</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="text-black-50">Nº de Processo: {{$processo->num_processo}}</h5>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Requerente</th>
                        <th>Contraparte</th>
                        <th>Secção</th>
                        <th>Subsecção</th>
                        <th>Especie</th>
                        <th>Data de entrada</th>
                    </tr>
                </thead>
                <tbody>

                <th>{{$processo->requerrente}}</th>
                <th>{{$processo->contaparte}}</th>
                <th>{{$processo->seccao ? $processo->seccao->nome : ''}}</th>
                <th>{{$processo->subseccao ? $processo->subseccao->nome : ''}}</th>
                <th>{{$processo->especie ? $processo->especie->nome : ''}}</th>
                <th>{{$processo->data_entrada}}</th>

                <tr class=""><th>Objecto</th><td colspan="7">{{$processo->objecto}}</td></tr>
                <tr class=""><th>Descrição</th><td colspan="7">{{$processo->descricao}}</td></tr>
                <tr class=""><th>Responsavel:</th><td colspan="7" class="text-c-orenge">{{$processo->requerrente}}</td></tr>


                <tr><th>Anexos</th>
                    <td colspan="7">
                <file src="{{ url("storage/{$processo->anexo}") }}" alt="{{ $processo->num_processo}}" style="max-width:100px;">
                    <a class="" href="/download">
                        Baixar Arquivos <i class="fas fa-download"></i>
                    </a>
                    </td>
                    </tr>
                    <tr><th></th>
                        <td colspan="7" class="text-right">
                            <form id="form-delete" action="{{ route('processo.destroy', $processo->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                Apagar
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" >
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                                @include('processo.processo_delete')
                            </form>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
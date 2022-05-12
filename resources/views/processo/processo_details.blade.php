@extends('layout.sisdpta')
@section('conteudo')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-plus-square bg-c-pink"></i>
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
        <h5>PROCESSO:{{$processo->num_processo}}</h5>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Requerente</th>
                        <th>Requerido</th>
                        <th>Contraparte</th>
                        <th>Seccao</th>
                        <th>Responsavel</th>
                        <th>Data entrada</th>
                        <th>Data Distribuição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>{{$processo->requerrente}}</th>
                        <th>{{$processo->recorrido}}</th>
                        <th>{{$processo->contaparte}}</th>
                        <th>{{$processo->seccao}}</th>
                        <th class="">{{$processo->requerrente}}</th>
                        <th>{{$processo->data_entrada}}</th>
                        <th>{{$processo->data_entrada}}</th>
                    </tr>
                    <tr><th>Objecto</th><td colspan="7">{{$processo->objecto}}</td></tr>
                    <tr><th>Descrição</th><td colspan="7">{{$processo->descricao}}</td></tr>
                    <tr><th>Anexos</th><td colspan="7"><img src="{{ url("storage/{$processo->anexo}") }}" alt="{{ $processo->num_processo}}" style="max-width:100px;"></td></tr>
                    <tr><th><a href="/download" style="padding: 12px; color: #E85445">Baixar Ficheiros</a></th><td colspan="7"></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
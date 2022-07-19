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
    <div class="card-block">
        <!-- Row start -->
        <div class="row m-b-20">
            <div class="col-lg col-sm">
                <div class="row">
                    <div class="col-sm sub-title"> {{ $processo->num_processo }} </div>

                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#processo" role="tab">
                            <i class="ti-list"></i> Detalhes</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#parecer" role="tab">
                            <i class="ti-pencil"></i> Parecer</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#anexo" role="tab">
                            <i class="ti-clip"></i> Anexo</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">
                            <i class="ti-settings"></i> Definicoes</a>
                        <div class="slide"></div>
                    </li>
                </ul>
                <!-- DETALHES DO PROCESSO -->
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="processo" role="tabpanel">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="bg-danger">
                                            <th>Requerente</th>
                                            <th>Contraparte</th>
                                            <th>Secção</th>
                                            <th>Subsecção</th>
                                            <th>Especie</th>
                                            <th>Data de entrada</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <td>{{ $processo->requerrente }}</td>
                                    <td>{{ $processo->contaparte }}</td>
                                    <td>{{ $processo->seccao ? $processo->seccao->nome : '' }}</td>
                                    <td>{{ $processo->subseccao ? $processo->subseccao->nome : '' }}</td>
                                    <td>{{ $processo->especie ? $processo->especie->nome : '' }}</td>
                                    <td>{{ $processo->data_entrada }}</td>
                                    <tr class=""><th></th><td colspan="6"></td></tr>
                                    <tr class=""><th>Objecto</th><td colspan="6">{{$processo->objecto}}</td></tr>
                                    <tr class=""><th>Descrição</th><td colspan="6">{{$processo->descricao}}</td></tr>
                                    <tr class=""><th>Responsavel:</th><td colspan="6" class="text-c-orenge">{{$processo->requerrente}}</td></tr>                                                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- FIM DOS DETALHES DO PROCESSO -->
                    <div class="tab-pane" id="parecer" role="tabpanel">
                        <div class="text-right">
                            <form>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                    <i class="fas fa-plus-circle"></i> Novo Parecer
                                </button>
                                @include('processo.processo_parecer')
                            </form>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr class="bg-danger">
                                    <th>Parecer</th>
                                    <th>Detalhes</th>
                                    <th>Data</th>
                                    <th>User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($processo->pareceres as $parecer)
                                    <td>{{ $parecer->nome }}</td>
                                    <td>{{ $parecer->descricao_parecer }}</td>
                                    <td>{{ $parecer->created_at }}</td>
                                    <td>{{ $parecer->user }}</td>
                                    @endforeach
                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane" id="anexo" role="tabpanel">
                        @foreach($processo->anexos as $anexo)
                        <div class="row">
                            <div class="col-sm">
                                {{$anexo->nome}}
                            </div>
                            <div class="col-sm">
                                <a class="" href="{{ $anexo->ficheiro }}" target="_blank">
                                    Baixar Arquivo/s <i class="fas fa-download"></i>
                                </a>
                            </div>                           

                        </div>

                        @endforeach
                    </div>
                    <div class="tab-pane" id="settings3" role="tabpanel">
                        <form id="form-delete" action="{{ route('processo.destroy', $processo->id) }}" method="POST" >
                            @csrf
                            @method('DELETE')

                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" >
                                Apagar <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            @include('processo.processo_delete')
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <a class="btn btn-outline-primary" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-arrow-circle-left"> Voltar</i>
            </a>
        </div>

    </div>
</div>










@endsection
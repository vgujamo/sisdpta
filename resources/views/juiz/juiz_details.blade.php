@extends('layout.sisdpta')
@section("conteudo")
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-list bg-c-pink"></i>
                <div class="d-inline">
                    <h4>Detalhes do Juiz</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>{{ $juiz->pessoa->nome }} </h5>
        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        </ul></div>
    </div>
    <div class="card-block">
        <!-- Row start -->
        <div class="row m-b-30">
            <div class="col-lg col-xl">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pessoais" role="tab"><i class="fas fa-user"></i> Dados Pessoais</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#identificacao" role="tab"><i class="fas fa-id-card"></i> Identificação</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#contacto" role="tab"><i class="fas fa-phone"></i> Contacto</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#definicoes" role="tab"><i class="fas fa-wrench"></i> Definições</a>
                        <div class="slide"></div>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="pessoais" role="tabpanel">

                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="bg-danger">
                                        <tr>
                                            <th>Nome</th>
                                            <th>Apelido</th>
                                            <th>Nome do Pai</th>
                                            <th>Nome da Mãe</th>
                                            <th>Sexo</th>
                                            <th>Estado civil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->nome : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->apelido : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->pai : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->mae: '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->sexo : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->estado_civil : '' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="identificacao" role="tabpanel">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="bg-danger">
                                        <tr>
                                            <th>Tipo Doc.</th>
                                            <th>Num. Documento</th>
                                            <th>NUIT</th>
                                            <th>Nacionalidade</th>
                                            <th>Provincia de Nasc</th>
                                            <th>Distrito de Nasc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->tipo_doc : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->num_doc : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->nuit : '' }}</td>
                                            <td>{{ $juiz->pessoa->pais ? $juiz->pessoa->pais->nome : ''}}</td>
                                            <td>{{ $juiz->pessoa->provincia ? $juiz->pessoa->provincia->nome : '' }}</td>
                                            <td>{{ $juiz->pessoa->distrito ? $juiz->pessoa->distrito->nome : '' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="contacto" role="tabpanel">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="bg-danger">
                                        <tr>
                                            <th>Contacto</th>
                                            <th>Contacto Alternativo</th>
                                            <th>email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->contacto1 : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->contacto2 : '' }}</td>
                                            <td>{{ $juiz->pessoa ? $juiz->pessoa->email : '' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="definicoes" role="tabpanel">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="bg-danger">
                                        <tr>
                                            <th>Seccao</th>
                                            <th>Subseccao</th>
                                            <th>Presidente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $juiz->seccao ? $juiz->seccao->nome : '' }}</td>
                                            <td>{{ $juiz->subseccao ? $juiz->subseccao->nome : '' }}</td>
                                            <td>{{ $juiz->presidente }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-sm btn-group-sm text-right">
                                    <form id="form-delete" action="#" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" >
                                            <i class="fa fa-trash" aria-hidden="true"></i> 
                                        </button>
                                        Apagar registo
                                        @include('juiz.juiz_delete')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm btn-group-sm">
            <a class="btn btn-outline-primary" href="{{ route('juiz.juiz_list') }}">
                <i class="fa fa-arrow-circle-left"></i>  Voltar
            </a>
        </div>
    </div>
</div>

@endsection
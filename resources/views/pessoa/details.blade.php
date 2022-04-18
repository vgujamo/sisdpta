@extends('layout.sisdpta')
@section("conteudo")

<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-bookmark"></i> Dados Pessoais
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Nome do Pai</th>
                            <th>Nome da Mãe</th>
                            <th>Estado civil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$pessoa->nome}}</td>
                            <td>{{$pessoa->apelido}}</td>
                            <td>{{$pessoa->pai}}</td>
                            <td>{{$pessoa->mae}}</td>
                            <td>{{$pessoa->estado_civil}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-user"></i> Dados de identificação
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
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
                            <td>{{$pessoa->tipo_doc}}</td>
                            <td>{{$pessoa->num_doc}}</td>
                            <td>{{$pessoa->nuit}}</td>
                            <td>{{$pessoa->nacionalidade}}</td>
                            <td>{{$pessoa->provincia_nas}}</td>
                            <td>{{$pessoa->distrito_nas}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-phone"></i> Dados de Contacto
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Contacto</th>
                            <th>Contacto Alternativo</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$pessoa->contacto1}}</td>
                            <td>{{$pessoa->contacto2}}</td>
                            <td>{{$pessoa->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fa fa-exclamation-triangle"></i> Apagar iten
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                Ao clicar no botao abaixo ira eleminar definitivamente todos os dados aqui descritos.
                Esta e uma operacao inreversivel, portanto tenha a certeza absoluta de tal accao.
                <div class="col-sm btn-group-sm">
                    <form id="form-delete" action="{{ route('pessoa.destroy', $pessoa->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" >
                            <i class="fa fa-trash" aria-hidden="true"></i> Apagar registo
                        </button>
                        @include('pessoa.delete')

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="col-sm btn-group-sm">
    <a class="btn btn-outline-primary" href="{{ route('pessoa.list') }}">
        <i class="fa fa-arrow-circle-left"></i>  Voltar
    </a>
</div>


@endsection
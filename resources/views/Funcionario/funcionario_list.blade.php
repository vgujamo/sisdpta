@extends('layout.sisdpta')
@section("conteudo")
@csrf
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-list bg-c-pink"></i>
                <div class="d-inline">
                    <h4>Listar Funcionario</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<form class="from-horizontal" method="get" action="{{ route('funcionario.search')}}">
    @csrf
    <div class="row">
        <div class="col-sm input-group form">
            <input class="form-control" placeholder="Pesquise pelo nome ou apelido)" id="search" type="search" name="search" value="{{ request()->query('search')}}" />                          
            <button type="submit" class="btn btn-primary" autofocus="">
                <i class="fas fa-search"></i> Pesquisar
            </button>
        </div>
    </div>
</form>


@csrf

<table class="table table-sm table-striped">
    <thead class="">
        <tr class="text-uppercase">
            <th>#</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>NIF</th>
            <th>Data Ater.</th>
            <th class="text-center">Acção</th>

        </tr>
    </thead>
    <tbody class="text text-Sentensecase">
        @forelse($funcionarios as $funcionario)
        <tr>
            <td> {{ $funcionario->id }} </td>
            <td> {{ $funcionario->pessoa ? $funcionario->pessoa->nome : '' }}</td>
            <td> {{ $funcionario->pessoa ? $funcionario->pessoa->apelido : '' }} </td>
            <td> {{ $funcionario->nif }} </td>
            <td> {{ $funcionario->updated_at }} </td>
            <!-- BOTAO PARA VISUALIZAR -->
            <td class="text-right" >
                <a class="btn btn-outline-secondary" href="{{ route('funcionario.funcionario_details', $funcionario->id) }}">
                    <i class="fas fa-eye"></i>
                </a>
                <!-- BOTAO PARA EDITAR -->
                <a class="btn btn-outline-primary" href="{{ route('funcionario.funcionario_edit', $funcionario->id) }}">
                    <i class="fas fa-edit"></i>
                </a>
            </td>         
        </tr>

        @empty
        <tr>
    <div class="bg-danger text-center">
        <i class="fas fa-exclamation-circle"></i> 
        Dados não encontrados.
    </div>
</tr>

@endforelse

</tbody>
</table>

{{ $funcionarios->onEachSide(5)->links() }}

@endsection
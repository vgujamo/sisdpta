@extends('layout.sisdpta')
@section("conteudo")
@csrf
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-list bg-c-pink"></i>
                <div class="d-inline">
                    <h4>Listar Juizes</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<form class="from-horizontal" method="get" action="">
    @csrf
    <div class="row">
        <div class="col-sm input-group form">
            <input class="form-control" placeholder="Pesquise pelo nome ou apelido" aria-label="Close" id="search" type="search" name="search" value="{{ request()->query('search')}}" />                          
            <button type="submit" class="btn btn-primary" autofocus="">
                <i class="fas fa-search"></i> Pesquisar
            </button>
        </div>

</form>
</div>



<table class="table table-sm table-striped">
    <thead class="">
        <tr class="text-uppercase">
            <th>#</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Data Ater.</th>
            <th class="text-center">Acção</th>
        </tr>
    </thead>
    <tbody class="text text-Sentensecase">
        @forelse($juizes as $juiz)
        <tr>
            <td> {{$juiz->id}} </td>
            <td> {{$juiz->pessoa->nome}}</td>
            <td> {{$juiz->pessoa->apelido}} </td>
            <td> {{$juiz->updated_at}} </td>
            <!-- BOTAO PARA VISUALIZAR -->
            <td class="text-right" >
                <a class="btn btn-outline-secondary" href="{{ route('juiz.juiz_details', $juiz->id) }}">
                    <i class="fas fa-eye"></i>
                </a>
                <!-- BOTAO PARA EDITAR -->
                <a class="btn btn-outline-primary" href="{{ route('juiz.juiz_edit', $juiz->id) }}">
                    <i class="fas fa-edit"></i>
                    </i>
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

{{ $juizes->onEachSide(10)->links() }}

@endsection
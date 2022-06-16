@extends('layout.sisdpta')
@section('conteudo')
@include('especie.especie_header')
<form class="from-horizontal" method="get" action="{{ route('especie.search')}}">
    @csrf
    <div class="row">
        <div class="col-sm input-group form">
            <input class="form-control" placeholder="Insira o nome da especie a pesquisar" aria-label="" id="search" type="search" name="search" value="{{ request()->query('search')}}" />                          
            <button type="submit" class="btn btn-primary" autofocus="">
                <i class="fas fa-search"></i> Pesquisar
            </button>
        </div>
    </div>
</form>

<div class="card">
    <div class="card-header">
        <h5>Listagem de Especies</h5>
        <span>Total de:<code>{{ $especies->count()}}</code>Especies de Processos</span>

        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="">
                            <th>#</th>
                            <th>Especie</th>
                            <th>Secção</th>
                            <th>Subsecção</th>
                            <th class="text-center">Acção</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($especies as $especie)
                        <tr>
                            <td>#</td>
                            <td>{{$especie->nome}}</td>
                            <td>{{$especie->seccao ? $especie->seccao->nome : ''}}</td>
                            <td>{{$especie->subseccao ? $especie->subseccao->nome : ''}}</td>
                            <!-- BOTAO PARA VISUALIZAR -->
                            <td class="text-right" >
                                <a class="btn btn-outline-secondary" href="{{ route('especie.especie_details', $especie->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <!-- BOTAO PARA EDITAR -->
                                <a class="btn btn-outline-primary" href="{{ route('especie.especie_edit', $especie->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                    <div class="bg-danger text-center">
                        <i class="fas fa-exclamation-triangle"></i> 
                        Especie não encontrada! ou nome incorrecto.
                    </div>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{ $especies->onEachSide(0)->links() }}


@endsection  
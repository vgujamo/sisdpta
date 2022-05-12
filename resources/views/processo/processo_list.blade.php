@extends('layout.sisdpta')
@section('conteudo')
@include('processo.processo_header')

<?php
use App\Models\Processo;

$todos = Processo::all()->count();
?>


<form class="from-horizontal" method="get" action="">
    @csrf
    <div class="row">
        <div class="col-sm input-group form">
            <input class="form-control" placeholder="Insira o numero de processo)" aria-label="" id="search" type="search" name="search" value="" />                          
            <button type="submit" class="btn btn-primary" autofocus="">
                <i class="fas fa-search"></i> Pesquisar
            </button>
        </div>
    </div>
</form>

<div class="card">
    <div class="card-header">
        <h5>Listagem de processos</h5>
        <span>Total de:<code><?= $todos ?></code> Processos</span>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Nº de Processo</th>
                            <th>Requerente</th>
                            <th>Contraparte</th>
                            <th>Data Registo.</th>
                            <th>User</th>
                            <th class="text-center">Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($processos as $processo)
                        <tr>
                            <td class="text-center">
                                <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                            </td>
                            <td>{{ $processo->num_processo}}</td>
                            <td>{{ $processo->requerrente}}</td>
                            <td>{{ $processo->contaparte}}</td>
                            <td>{{ $processo->data_entrada}}</td>
                            <td>{{ $processo->recorrido}}</td>
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
                                <a class="btn btn-outline-danger" href="{{ route('processo.processo_edit', $processo->id)}}">
                                    <i class="fas fa-trash"></i>
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
            </div>
        </div>
    </div>
</div>

{{ $processos->onEachSide(1)->links() }}
@endsection  
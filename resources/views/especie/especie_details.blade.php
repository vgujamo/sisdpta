@extends('layout.sisdpta')
@section('conteudo')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-list bg-c-pink"></i>
                <div class="d-inline">
                    <h4>Detalhes da Especie: {{ $especie->nome }}</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="text-black-50"> </h5>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-secondary">
                        <th>#</th>
                        <th>Especie</th>
                        <th>Secção</th>
                        <th>Subsecção</th>
                    </tr>
                </thead>
                <tbody>

                <th>#</th>
                <th>{{$especie->nome}}</th>
                <th>{{$especie->seccao ? $especie->seccao->nome : ''}}</th>
                <th>{{$especie->subseccao ? $especie->subseccao->nome : ''}}</th>
                <tr class=""><th>Descrição</th><td colspan="7">{{$especie->descricao}}</td></tr>
                <td colspan="1" class="text-left"><a class="btn btn-bg-c-lite-green" href=" {{ route('especie.especie_list')}}">
                        <i class="fas fa-arrow-alt-circle-left"></i>Voltar</a></td>
                <td colspan="6" class="text-right">
                    <form id="form-delete" action="{{ route('especie.destroy', $especie->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        Apagar
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" >
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        @include('especie.especie_delete')
                    </form>
                </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
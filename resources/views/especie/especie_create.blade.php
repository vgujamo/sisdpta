@extends('layout.sisdpta')
@section('conteudo')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-plus-square bg-c-pink"></i>
                <div class="d-inline">
                    <h4>Nova Especie de Processo</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<form class="form-horizontal" role="form" action="{{ route('especie.store') }}" method="post">
    @csrf
    @foreach ($errors->all() as $error)
    @endforeach
    <div class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="seccao_id">Secção</label>
                            <select class="form-control @error('seccao_id') is-invalid @enderror"  name="seccao_id" id="seccao_dropdwn">
                                <option disabled selected>---Selecione a Seccção---</option>
                                @foreach($seccoes as $key =>$seccao)
                                @dump($key)

                                <option value="{{$seccao->id}}" >{{$seccao->nome}}</option>
                                @endforeach
                            </select>
                            @error('seccao_id')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="subseccao_id">Subsecção</label>
                            <select class="form-control @error('subseccao_id') is-invalid @enderror" name="subseccao_id" id="subseccao_dropdown">
                                <option disabled selected>---Selecione a SubSecção---</option>

                                <option value=""></option>
                            </select>

                            @error('subseccao_id')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="nome">Especie</label>
                            <input class="form-control @error('nome') is-invalid @enderror" type="text" placeholder="Espécie" name="nome" value="{{ old('nome') }}" />

                            @error('nome')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="descricao">Descrição (Opcional)</label>
                            <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Descrição do processo (Opcional)" name="descricao" rows="4" cols="10"> {{ old('descricao') }} </textarea>

                            @error('descricao')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <button type="reset" class="btn btn-primary btn-danger btn-block"><i class="icofont icofont-close-circled"></i> Cancelar</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <button type="submit" class="btn btn-primary btn-success btn-block"><i class="icofont icofont-check-circled"></i> Gravar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>

@push('especies')
<script>
    $(document).ready(function () {
        $("#seccao_dropdwn").on('change', function () {
//            alert('Ola Pais'); return;
            let id = this.value;
            let url = '{{ route("get_subseccao_by_seccao",":id") }}';
            url = url.replace(":id", id);
            $.ajax({
                type: 'GET',
                url: url,
                success: function (subseccoes) {
                    //Preencher Select Por JavaScript
                    subseccao_dropdown.innerHTML = ''; //Limpa oSelect
                    // especie_dropdown.innerHTML = ''; //Limpa oSelect
                    subseccoes.forEach((subseccao) => {
                        let option = document.createElement('option');
                        option.value = subseccao.id;
                        option.text = subseccao.nome;
                        subseccao_dropdown.append(option)
                    });
                }
            });
        });
    });
</script>
@endpush

@endsection
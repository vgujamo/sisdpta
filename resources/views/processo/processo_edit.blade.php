@extends('layout.sisdpta')
@section('conteudo')

<form class="form-horizontal" role="form" action="{{ route('processo.update', $processo->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @foreach ($errors->all() as $error)
    @endforeach
    @method('PUT')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont icofont-plus bg-c-pink"></i>
                    <div class="d-inline">
                        <h4>Editar Processo</h4>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="num_processo">Número de Processo</label>
                            <input class="form-control @error('num_processo') is-invalid @enderror" type="text" placeholder="Numero de Processo" name="num_processo" value="{{$processo->num_processo}}" />
                            @error('num_processo')
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
                            <label form="data_entrada">Data de entrada</label>
                            <input class="form-control @error('data_entrada') is-invalid @enderror" type="date" placeholder="Data de entrada" name="data_entrada" value="{{$processo->data_entrada}}" />
                            @error('data_entrada')
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
                            <label form="seccao_id">Secção</label>
                            <select class="form-control @error('seccao_id') is-invalid @enderror"  name="seccao_id" id="seccao_dropdwn">
                                <option disabled selected>---Selecione a Seccção---</option>
                                @foreach($seccoes as $key =>$seccao)


                                <option value="{{ $seccao->id }}" @if ($seccao->id === $seccao->id || old('seccao_id') === $seccao->id) selected @endif > {{ $seccao->nome }}</option>
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
                                <option disabled selected>--Selecione a SubSecção--</option>
                                @foreach($subseccoes as $key =>$subseccao)
                                <option value="{{ $subseccao->id }}" @if ($subseccao->id === $subseccao->id || old('subseccao_id') === $subseccao->id) selected @endif > {{ $subseccao->nome }} </option>
                                @endforeach
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
                            <label form="especie_id">Especie</label>
                            <select class="form-control @error('especie_id') is-invalid @enderror" name="especie_id" id="especie_dropdown">
                                <option disabled selected>--Selecione a Especie--</option>
                                @foreach($especies as $key =>$especie)
                                <option value="{{ $especie->id }}" @if ($especie->id === $especie->id || old('especie_id') === $especie->id) selected @endif > {{ $especie->nome }} </option>
                                @endforeach
                            </select>
                            @error('especie_id')
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
                            <label form="requerrente">Requerente/Entidade</label>
                            <input class="form-control @error('requerrente') is-invalid @enderror" type="text" placeholder="Requerente/Entidade" name="requerrente" value="{{ old('requerrente', $processo->requerrente) }}" />
                            @error('requerrente')
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
                            <label form="recorrido">Recorrido/Ex.Económico</label>
                            <input class="form-control @error('recorrido') is-invalid @enderror" type="text" placeholder="Recorrido (Opcional)" name="recorrido" value="{{ old('recorrido', $processo->recorrido) }}" />
                            @error('recorrido')
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
                            <label form="contaparte">Contraparte</label>
                            <input class="form-control @error('contaparte') is-invalid @enderror" type="text" placeholder="Contraparte" name="contaparte" value="{{ old('contraparte',$processo->contaparte) }}"  />
                            @error('contaparte')
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
                            <label form="objecto">Objecto</label>
                            <textarea class="form-control @error('objecto') is-invalid @enderror" id="objecto" placeholder="Objecto do processo" name="objecto" rows="2" cols="10"> {{ old('objecto',$processo->objecto) }} </textarea>
                            @error('objecto')
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
                            <label form="descricao">Descrição do Processo (Opcional)</label>
                            <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Descrição do processo " name="descricao" rows="4" cols="10"> {{ old('descricao',$processo->descricao) }} </textarea>
                            @error('descricao')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-block">
                <div class="row">
                    <div class="col-sm">
                        <ul class="nav nav-tabs md-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#parecer" role="tab">
                                    <i class="fas fa-pen"></i> Parecer</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#anexo" role="tab">
                                    <i class="fas fa-paperclip"></i> Anexo</a>
                                <div class="slide"></div>
                            </li>
                        </ul>

                        <div class="tab-content card-block">
                            <div class="tab-pane active" id="parecer" role="tabpanel">
                                <div class="row">
                                    <div class="form-group col-sm-3 input-group-sm">
                                        <select class="form-control @error('parecer_id') is-invalid @enderror" name="parecer_id" id="parecer_dropdown">
                                            <option disable selected>--Selecione o Parecer--</option>
                                            @foreach($pareceres as $key =>$parecer)

                                            <option value="{{$parecer->id  }}" @if ($parecer->id === $parecer->id || old('parecer_id') === $parecer->id) selected @endif >{{$parecer->nome}}</option>
                                            @endforeach
                                        </select>
                                        @error('parecer_id')
                                        <span class="invalid-feedback" role="alert">
                                            <b><i>{{$message}}</i></b>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm input-group-sm">
                                        <label form="descricao">Descrição do parecer (Opcional)</label>
                                        <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Parecer" name="descricao" rows="2" cols="10"> {{ old('descricao', $processo->descricao) }}</textarea>
                                        @error('descricao')
                                        <span class="invalid-feedback" role="alert">
                                            <b><i>{{$message}}</i></b>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
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
                                <div class="col-sm">
                                    <label form="anexo">Anexo</label>
                                    <input class="form-control @error('anexo') is-invalid @enderror" type="file"
                                           name="anexos[]" wire:model="anexo" accept="" multiple=""/>
                                    @error('anexo')
                                    <span class="invalid-feedback" role="alert">
                                        <b><i>{{$message}}</i></b>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <button type="submit" class="btn btn-primary btn-success btn-block"><i class="icofont icofont-check-circled"></i> |Gravar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</form>

@push('processo')
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
                    especie_dropdown.innerHTML = ''; //Limpa oSelect
                    subseccoes.forEach((subseccao) => {
                        let option = document.createElement('option');
                        option.value = subseccao.id;
                        option.text = subseccao.nome;
                        subseccao_dropdown.append(option)
                    });
                    // Preencher Select por Ficheiro
                    // $("#provincia_dropdown").html(provincias);
                }
            });
        });
        $("#subseccao_dropdown").on('change', function () {
//            alert('Ola Provincia'); return;
            let id = this.value;
            let url = '{{ route("get_especie_by_subseccao",":id") }}';
            url = url.replace(":id", id);
            $.ajax({
                type: 'GET',
                url: url,
                success: function (especies) {
//                    console.table(data);
                    //Preencher Select Por JavaScript
                    especie_dropdown.innerHTML = ''; //Limpa oSelect
                    especies.forEach((especie) => {
                        let option = document.createElement('option');
                        option.value = especie.id;
                        option.text = especie.nome;
                        especie_dropdown.append(option)
                    });
                    // Preencher Select por Ficheiro
                    // $("#provincia_dropdown").html(provincias);
                    //$("#provincia_dropdown").html(data);
                }
            });
        });
    });

</script>
@endpush


@push('select_parecer')
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
                    especie_dropdown.innerHTML = ''; //Limpa oSelect
                    subseccoes.forEach((subseccao) => {
                        let option = document.createElement('option');
                        option.value = subseccao.id;
                        option.text = subseccao.nome;
                        subseccao_dropdown.append(option)
                    });
                    // Preencher Select por Ficheiro
                    // $("#provincia_dropdown").html(provincias);
                }
            });
        });
    });

    @endpush



            @endsection
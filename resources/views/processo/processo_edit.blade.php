@extends('layout.sisdpta')
@section('conteudo')

<form class="form-horizontal" role="form" action="{{ route('processo.update', $processo->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @foreach ($errors->all() as $error)
    @endforeach
    @method('PUT')
    <div class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="num_processo">Número de Processo</label>
                            <input class="form-control @error('num_processo') is-invalid @enderror" type="text" placeholder="Numero de Processo" name="num_processo" value="{{ $processo->num_processo }}" />
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
                            <input class="form-control @error('data_entrada') is-invalid @enderror" type="date" placeholder="Data de entrada" name="data_entrada" value="{{ $processo->data_entrada }}" />
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
                            <label form="seccao">Secção</label>
                            <select class="form-control @error('seccao') is-invalid @enderror" type="text" name="seccao" id="seccao" value="{{ $processo->seccao}}">
                                <option disabled selected>Selecione a Seccao</option>

                                <option value="1 SubSeccao">1 Seccao</option>

                            </select>
                            @error('seccao')
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
                            <label form="subseccao">Subsecção</label>
                            <select class="form-control @error('subseccao') is-invalid @enderror" type="text" name="subseccao" id="subseccao" value="{{ $processo->subseccao}}">
                                <option disabled selected>Selecione a SubSeccao</option>

                                <option value="1 SubSeccao">1 SubSeccao</option>

                            </select>
                            @error('subseccao')
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
                            <label form="especie">Especie</label>
                            <select class="form-control @error('especie') is-invalid @enderror" type="text" name="especie" id="especie">
                                <option disabled selected>Selecione a Seccao</option>

                                <option value="Especie">Especie</option>

                            </select>
                            @error('especie')
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
                            <label form="requerrente">Requerente</label>
                            <input class="form-control @error('requerrente') is-invalid @enderror" type="text" placeholder="Requerente" name="requerrente" value="{{ $processo->requerrente}}" />
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
                            <label form="recorrido">Recorrido</label>
                            <input class="form-control @error('recorrido') is-invalid @enderror" type="text" placeholder="recorrido" name="recorrido" value="{{ $processo->recorrido}}" />
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
                            <input class="form-control @error('contaparte') is-invalid @enderror" type="text" placeholder="Contraparte" name="contaparte" value="{{ $processo->contaparte}}" />
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
                            <textarea class="form-control @error('objecto') is-invalid @enderror" id="objecto" name="objecto" placeholder="Objecto do Processo" rows="2" cols="10" >{{ $processo->objecto}}</textarea>
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
                            <label form="descricao">Descricao</label>
                            <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" placeholder="Descrição do processo (Opcional)" rows="4" cols="10">{{ $processo->descricao}}</textarea>
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
                        <div class="form-group col-sm-5 input-group-sm">
                            <label form="anexo">Anexo</label>
                            <input class="form-control @error('anexo') is-invalid @enderror" type="file" placeholder="Anexo" name="anexo" value="{{ $processo->anexo}}" />
                            @error('anexo')
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
                            <button type="submit" class="btn btn-primary btn-success btn-block"><i class="icofont icofont-check-circled"></i> |Gravar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection
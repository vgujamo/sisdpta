@extends('layout.sisdpta')
@section('conteudo')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont icofont-edit bg-c-pink"></i>
                <div class="d-inline">
                    <h4>Editar Funcionario</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>


<form class="form-horizontal" role="form" action="{{ route('funcionario.store') }}" method="post" autocomplete="on">
    @csrf
    @foreach ($errors->all() as $error)
    @endforeach
    <div class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm col-sm">
                    <div class="row p-1">
                        <div class="form-group col-sm-2 input-group-sm">
                            <label form="nif">NIF</label>
                            <input class="form-control @error('nif') is-invalid @enderror" type="text" name="nif" placeholder="NIF" value="{{ $funcionario->nif }}" />
                            @error('nif')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>  
                    </div>
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="nome">Nome</label>
                            <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" placeholder="Nome" value="{{ old('nome',$funcionario->pessoa->nome??'') }}"  />
                            @error('nome')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>   
                        <div class="form-group col-sm-5 input-group-sm">
                            <label form="apelido">Apelido</label>
                            <input class="form-control @error('apelido') is-invalid @enderror" type="text" name="apelido" placeholder="Apelido" value="{{ old('apelido',$funcionario->pessoa->apelido??'') }}"/>
                            @error('apelido')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>   
                    </div>

                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="pai">Nome do pai</label><!-- comment -->
                            <input class="form-control @error('pai') is-invalid @enderror" type="text" name="pai" placeholder="Nome do Pai" value="{{ old('pai',$funcionario->pessoa->pai??'') }}"/>
                            @error('pai')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>   
                        <div class="form-group col-sm input-group-sm">
                            <label form="mae">Nome da mãe</label>
                            <input class="form-control @error('mae') is-invalid @enderror" type="text" name="mae" placeholder="Nome da Mãe" value="{{ old('mae',$funcionario->pessoa->mae??'') }}"/>
                            @error('mae')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>   
                    </div>
                    <div class="row p-1">
                        <div class="form-group col-sm input-group-sm">
                            <label form="sexo">Sexo:</label><br>

                            <div class="form-check-inline">
                                <label class="form-check-label @error('sexo') is-invalid @enderror" form="Masculino">Masculino
                                    <input type="radio" id="M" name="sexo" class="form-check-input" value="M" <?php echo $funcionario->pessoa->sexo == 'M' ? 'checked' : ''; ?>  //>
                                    @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <b><i>{{$message}}</i></b>
                                    </span>
                                    @enderror
                                </label>
                            </div> 
                            <div class="form-check-inline">
                                <label class="form-check-label @error('sexo') is-invalid @enderror" form="Femenino">Femenino
                                    <input type="radio" id="" name="sexo" class="form-check-input" value="F" <?php echo $funcionario->pessoa->sexo == 'F' ? 'checked' : ''; ?> //>
                                    @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <b><i>{{$message}}</i></b>
                                    </span>
                                    @enderror
                                </label>
                            </div> 
                        </div>
                        <div class="form-group col-sm">
                            <label form="data_nasc">Data de Nascimento</label>
                            <input class="form-control @error('data_nasc') is-invalid @enderror" type="date" name="data_nasc" value="{{ old('data_nasc',$funcionario->pessoa->data_nasc??'') }}" />
                            @error('data_nasc')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div> 
                        <div class="form-group col-sm">
                            <label form="estado_civil">Estado Civil</label>
                            <select class="form-control @error('estado_civil') is-invalid @enderror" type="text" name="estado_civil" id="estado_civil" value="{{ old('estado_civil',$funcionario->pessoa->estado_civil??'') }}">
                                <option disabled selected>Selecione o estado civil</option>
                                <option value="Solteiro" <?php echo $funcionario->pessoa->estado_civil == 'Solteiro' ? 'selected' : ''; ?> /> Solteiro</option>
                                <option value="Casado" <?php echo $funcionario->pessoa->estado_civil == 'Casado' ? 'selected' : ''; ?> /> Casado</option>
                                <option value="Divorciado" <?php echo $funcionario->pessoa->estado_civil == 'Divorciado' ? 'selected' : ''; ?> /> Divorciado</option>
                            </select>
                            @error('estado_civil')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div> 
                    </div>


                    <div class="card">
                        <div class="card-block">
                            <!-- Row start -->
                            <div class="row">
                                <div class="col-sm col-sm">
                                    <div class="sub-title"></div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs  tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Naturalidade</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Residencia</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Identificacao</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Contacto</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabs card-block">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm form-group input-group-sm">
                                                    <label form="nacionalidade">Nacionalidade</label>
                                                    <input class="form-control @error('nacionalidade') is-invalid @enderror" type="text" name="nacionalidade" placeholder="Nacionalidade" value="{{ old('nacionalidade',$funcionario->pessoa->nacionalidade??'') }}" />
                                                    @error('nacionalidade')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm form-group input-group-sm">
                                                    <label form="provincia_nas">Provincia</label>
                                                    <input class="form-control @error('provincia_nas') is-invalid @enderror" type="text" name="provincia_nas" placeholder="Provincia" value="{{ old('provincia_nas',$funcionario->pessoa->provincia_nas??'') }}"/>
                                                    @error('provincia_nas')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm form-group input-group-sm">
                                                    <label form="distrito_nas">Distrito</label>
                                                    <input class="form-control @error('distrito_nas') is-invalid @enderror" type="text" name="distrito_nas" placeholder="Distrito" value="{{ old('distrito_nas',$funcionario->pessoa->distrito_nas??'') }}"/>
                                                    @error('distrito_nas')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="row p-1">
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="bairro">Bairro</label><!-- comment -->
                                                    <input class="form-control @error('bairro') is-invalid @enderror" type="text" name="bairro" placeholder="Bairro" value="{{ old('bairro',$funcionario->pessoa->bairro??'') }}" />
                                                    @error('bairro')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="quart">Quarteirão</label>
                                                    <input class="form-control @error('quart') is-invalid @enderror" type="text" name="quart" placeholder="Quarteirão"  value="{{ old('quart',$funcionario->pessoa->quart??'') }}"/>
                                                    @error('quart')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="rua">Rua</label><!-- comment -->
                                                    <input class="form-control @error('rua') is-invalid @enderror" type="text" name="rua" placeholder="Rua"  value="{{ old('rua',$funcionario->pessoa->rua??'') }}"/>
                                                    @error('rua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm-3 input-group-sm">
                                                    <label form="casa">Nº da Casa</label>
                                                    <input class="form-control @error('casa') is-invalid @enderror" type="text" name="casa" placeholder="Nº da casa" value="{{ old('casa',$funcionario->pessoa->casa??'') }}"/>
                                                    @error('casa')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                            <div class="row p-1">
                                                <div class="col-sm form-group input-group-sm">
                                                    <label form="tipo_doc">Tipo de Documento</label>
                                                    <select class="form-control @error('tipo_doc') is-invalid @enderror" name="tipo_doc" id="tipo_doc" type="text" value="{{ old('tipo_doc',$funcionario->pessoa->tipo_doc??'') }}">
                                                        <option disabled selected="">Tipo de Documento</option>
                                                        <option value="BI">BI</option>
                                                        <option value="Passaporte" <?php echo $funcionario->pessoa->tipo_doc == 'Passaporte' ? 'selected' : ''; ?> />Passaporte</option>
                                                        <option value="Cartão de Eleitor" <?php echo $funcionario->pessoa->tipo_doc == '' ? 'selected' : ''; ?> />Cartão de Eleitor</option>
                                                        <option value="Cédula" <?php echo $funcionario->pessoa->tipo_doc == 'Cartão de Eleitor' ? 'selected' : ''; ?> />Cédula</option>
                                                        <option value="DIRE" <?php echo $funcionario->pessoa->tipo_doc == 'DIRE' ? 'selected' : ''; ?> />DIRE</option>
                                                        <option value="Outro" <?php echo $funcionario->pessoa->tipo_doc == 'Outro' ? 'selected' : ''; ?> />Outros</option>
                                                    </select>
                                                    @error('tipo_doc')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="num_doc">Número do Documento</label><!-- comment -->
                                                    <input class="form-control @error('num_doc') is-invalid @enderror" type="text" name="num_doc" placeholder="Número do Documento" value="{{ old('num_doc',$funcionario->pessoa->num_doc??'') }}" />
                                                    @error('num_doc')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="nuit">NUIT</label>
                                                    <input class="form-control @error('nuit') is-invalid @enderror" type="text" name="nuit" placeholder="NUIT"  value="{{ old('nuit',$funcionario->pessoa->nuit??'') }}"/>
                                                    @error('nuit')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings1" role="tabpanel">
                                            <div class="row p-1">
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="contacto1">Contacto</label><!-- comment -->
                                                    <input class="form-control @error('contacto1') is-invalid @enderror" type="text" name="contacto1" placeholder="Contacto"  value="{{ old('contacto1',$funcionario->pessoa->contacto1??'') }}"/>
                                                    @error('contacto1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="contacto2">Contacto Alten</label>
                                                    <input class="form-control @error('contacto2') is-invalid @enderror" type="text" name="contacto2" placeholder="Contacto Altern" value="{{ old('contacto2',$funcionario->pessoa->contacto2??'') }}"/>
                                                    @error('contacto2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="email">email</label><!-- comment -->
                                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="email"  value="{{ old('email',$funcionario->pessoa->email??'') }}"/>
                                                    @error('email')
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
                            <div class="row p-1">
                                <div class="form-group- col-sm input-group-sm">
                                    <label form="observacao">Observação</label><!-- comment -->
                                    <textarea class="form-control @error('observacao') is-invalid @enderror" id="id" name="observacao" rows="4" cols="8" placeholder="Observação" value="{{ old('observacao',$funcionario->pessoa->observacao??'') }}"></textarea>
                                    @error('observacao')
                                    <span class="invalid-feedback" role="alert">
                                        <b><i>{{$message}}</i></b>
                                    </span>
                                    @enderror
                                </div>   
                            </div>

                            <div class="row p-4 ">
                                <div class="form-group col-sm-3">
                                    <button hr type="button" class="btn btn-danger form-control text-center" border="2" data-dismiss="modal">
                                        <i class="fas fa-cancel"></i> Cancelar
                                    </button>
                                </div>
                                <div class="form-group col-sm-3"></div>
                                <div class="form-group col-sm-3"></div>
                                <div class="form-group col-sm-3">
                                    <button type="submit" value="" class="btn btn-info form-control text-center" border="2">
                                        <i class="fas fa-save"></i> Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div
    </div>

</form>


@endsection
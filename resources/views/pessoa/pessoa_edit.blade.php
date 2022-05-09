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

<form class="form-horizontal" role="form" action="{{ route('pessoa.update', $pessoa->id) }}" " method="post" autocomplete="on" style="">
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
                            <label form="nome">Nome</label>
                            <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" placeholder="Nome" value="{{ $pessoa->nome }}"  />
                            @error('nome')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>   
                        <div class="form-group col-sm-5 input-group-sm">
                            <label form="apelido">Apelido</label>
                            <input class="form-control @error('nome') is-invalid @enderror" type="text" name="apelido" placeholder="Apelido" value="{{ $pessoa->apelido}}"/>
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
                            <input class="form-control @error('pai') is-invalid @enderror" type="text" name="pai" placeholder="Nome do Pai" value="{{ $pessoa->pai }}"/>
                            @error('pai')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div>   
                        <div class="form-group col-sm input-group-sm">
                            <label form="mae">Nome da mãe</label>
                            <input class="form-control @error('mae') is-invalid @enderror" type="text" name="mae" placeholder="Nome da Mãe" value="{{ $pessoa->mae }}"/>
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
                                <label class="form-check-label" form="Masculino">Masculino
                                    <input type="radio" id="" name="sexo"  class="form-check-input @error('sexo') is-invalid @enderror" value="M" <?php echo $pessoa->sexo == 'M' ? 'checked' : ''; ?> //>
                                    @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <b><i>{{$message}}</i></b>
                                    </span>
                                    @enderror
                                </label>
                            </div> 
                            <div class="form-check-inline">
                                <label class="form-check-label" form="Femenino">Femenino
                                    <input type="radio" id="" name="sexo" class="form-check-input form-check-input @error('sexo') is-invalid @enderror" value="F" <?php echo $pessoa->sexo == 'F' ? 'checked' : ''; ?>  //>
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
                            <input class="form-control @error('data_nasc') is-invalid @enderror" type="date" name="data_nasc" value="{{ $pessoa->data_nasc}}" />
                            @error('data_nasc')
                            <span class="invalid-feedback" role="alert">
                                <b><i>{{$message}}</i></b>
                            </span>
                            @enderror
                        </div> 
                        <div class="form-group col-sm">
                            <label form="">Estado Civil</label>
                            <select class="form-control @error('estado_civil') is invalid @enderror" name="estado_civil" id="estado_civil" type="text" >
                                <option disabled selected>Selecione o estado civil</option>
                                <option value="Solteiro" <?php echo $pessoa->estado_civil == 'Solteiro' ? 'selected' : ''; ?> />Solteiro</option>
                                <option value="Casado" <?php echo $pessoa->estado_civil == 'Casado' ? 'selected' : ''; ?> />Casado</option>
                                <option value="Divorciado" <?php echo $pessoa->estado_civil == 'Divorciado' ? 'selected' : ''; ?> />Divorciado</option>
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
                                                    <select class="form-control @error('nacionalidade') is-invalid @enderror" type="text" name="nacionalidade" id="nacionalidade">
                                                        <option disabled selected>Selecione a Nacionalidade</option>

                                                        <option value="Moçambicana" <?php echo $pessoa->nacionalidade == 'Moçambicana' ? 'selected' : ''; ?> />Moçambicana</option>

                                                    </select>
                                                    @error('nacionalidade')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm form-group input-group-sm">
                                                    <label form="provincia">Provincia</label>
                                                    <select class="form-control @error('provincia_nas') is-invalid @enderror" type="text" name="provincia_nas" id="provincia_nas">
                                                        <option disabled selected>Selecione a Provincia</option>

                                                        <option value="Maputo" <?php echo $pessoa->provincia_nas == 'Maputo' ? 'selected' : ''; ?> />Maputo</option>

                                                    </select>
                                                    @error('provincia_nas')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm form-group input-group-sm">
                                                    <label form="distrito">Distrito</label>
                                                    <select class="form-control @error('distrito_nas') is-invalid @enderror" type="text" name="distrito_nas" id="distrito_nas">
                                                        <option disabled selected>Selecione o Distrito</option>

                                                        <option value="Maputo" <?php echo $pessoa->distrito_nas == 'Maputo' ? 'selected' : ''; ?> />Maputo</option>

                                                    </select>
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
                                                    <input class="form-control @error('bairro') is invalid @enderror" type="text" name="bairro" placeholder="Bairro" value="{{ $pessoa->bairro }}" />
                                                    @error('bairro')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="quart">Quarteirão</label>
                                                    <input class="form-control @error('quart') is invalid @enderror" type="text" name="quart" placeholder="Quarteirão"  value="{{ $pessoa->quart}}"/>
                                                    @error('quart')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="rua">Rua</label><!-- comment -->
                                                    <input class="form-control @error('rua') is invalid @enderror" type="text" name="rua" placeholder="Rua"  value="{{ $pessoa->rua }}"/>
                                                    @error('rua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm-3 input-group-sm">
                                                    <label form="casa">Nº da Casa</label>
                                                    <input class="form-control @error('casa') is invalid @enderror" type="text" name="casa" placeholder="Nº da casa" value="{{ $pessoa->casa }}"/>
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
                                                    <select class="form-control @error('tipo_doc') is-invalid @enderror" name="tipo_doc" id="tipo_doc" type="text" value="{{ $pessoa->tipo_doc}}">
                                                        <option value="BI">BI</option>
                                                        <option value="Passaporte" <?php echo $pessoa->tipo_doc == 'Passaporte' ? 'selected' : ''; ?> />Passaporte</option>
                                                        <option value="Cartão de Eleitor"  <?php echo $pessoa->tipo_doc == 'Cartão de Eleitor' ? 'selected' : ''; ?> />Cartão de Eleitor</option>
                                                        <option value="Cédula" <?php echo $pessoa->tipo_doc == 'Cédula' ? 'selected' : ''; ?> />Cédula</option>
                                                        <option value="DIRE" <?php echo $pessoa->tipo_doc == 'DIRE' ? 'selected' : ''; ?> />DIRE</option>
                                                        <option value="Outro" <?php echo $pessoa->tipo_doc == 'Outro' ? 'selected' : ''; ?> />Outros</option>
                                                    </select>
                                                    @error('tipo_doc')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="num_doc">Número do Documento</label><!-- comment -->
                                                    <input class="form-control @error('num_doc') is invalid @enderror" type="text" name="num_doc" placeholder="Número do Documento" value="{{ $pessoa->num_doc }}" />
                                                    @error('num_doc')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="nuit">NUIT</label>
                                                    <input class="form-control @error('nuit') is invalid @enderror" type="text" name="nuit" placeholder="NUIT"  value="{{ $pessoa->nuit }}"/>
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
                                                    <input class="form-control @error('contacto1') is invalid @enderror" type="text" name="contacto1" placeholder="Contacto"  value="{{ $pessoa->contacto1 }}"/>
                                                    @error('contacto1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="contacto2">Contacto Alten</label>
                                                    <input class="form-control @error('contacto2') is invalid @enderror" type="text" name="contacto2" placeholder="Contacto Altern" value="{{ $pessoa->contacto2  }}"/>
                                                    @error('contacto2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <b><i>{{$message}}</i></b>
                                                    </span>
                                                    @enderror
                                                </div>   
                                                <div class="form-group col-sm input-group-sm">
                                                    <label form="email">email</label><!-- comment -->
                                                    <input class="form-control @error('email') is invalid @enderror" type="email" name="email" placeholder="email"  style="text-transform: lowercase" value="{{ $pessoa->email }}"/>
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
                                    <textarea class="form-control" id="id" name="observacao" rows="4" cols="8" placeholder="Observação" value="{{ $pessoa->observacao }}"></textarea>
                                </div>   
                            </div>


                            <div class="row p-4 ">
                                <div class="form-group col-sm-3">
                                    <button type="button" class="btn btn-danger form-control text-center" border="2">
                                        <i class="fas fa-cancel"></i> Cancelar
                                    </button>
                                </div>
                                <div class="form-group col-sm-3"></div>
                                <div class="form-group col-sm-3"></div>
                                <div class="form-group col-sm-3">
                                    <button type="submit" class="btn btn-info form-control text-center" border="2">
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
@extends('layout.sisdpta')
@section('conteudo')
<form class="form-horizontal" role="form" action="{{ route('pessoa.store') }}" " method="post" autocomplete="on" style="">
    <div class="row text-center">
        <h2>Cadastrar Pessoa</h2>
    </div>
    @csrf
    @foreach ($errors->all() as $error)
    @endforeach
    <div class="row p-1">
        <div class="form-group col-sm input-group-sm">
            <label form="nome">Nome</label>
            <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}"  />
            @error('nome')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm-5 input-group-sm">
            <label form="apelido">Apelido</label>
            <input class="form-control @error('apelido') is-invalid @enderror" type="text" name="apelido" placeholder="Apelido" value="{{ old('apelido') }}"/>
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
            <input class="form-control @error('pai') is-invalid @enderror" type="text" name="pai" placeholder="Nome do Pai" value="{{ old('pai') }}"/>
            @error('pai')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm input-group-sm">
            <label form="mae">Nome da mãe</label>
            <input class="form-control @error('mae') is-invalid @enderror" type="text" name="mae" placeholder="Nome da Mãe" value="{{ old('mae') }}"/>
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
                    <input type="radio" id="M" name="sexo" class="form-check-input" value="M" {{ (old("sexo", $pessoa->sexo??'')=="M"?"cheked":"") }}/>
                    @error('sexo')
                    <span class="invalid-feedback" role="alert">
                        <b><i>{{$message}}</i></b>
                    </span>
                    @enderror
                </label>
            </div> 
            <div class="form-check-inline">
                <label class="form-check-label @error('sexo') is-invalid @enderror" form="Femenino">Femenino
                    <input type="radio" id="" name="sexo" class="form-check-input" value="F" {{ (old("sexo", $pessoa->sexo??'')=="F"?"cheked":"") }}/>
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
            <input class="form-control @error('data_nasc') is-invalid @enderror" type="date" name="data_nasc" value="{{ old('data_nasc') }}" />
            @error('data_nasc')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div> 
        <div class="form-group col-sm">
            <label form="estado_civil">Estado Civil</label>
            <select class="form-select @error('estado_civil') is-invalid @enderror" type="text" name="estado_civil" id="estado_civil" value="{{ old('estado_civil') }}">
                <option disabled selected>Selecione o estado civil</option>
                <option value="Solteiro">Solteiro</option>
                <option value="Casado">Casado</option>
                <option value="Divorciado">Divorciado</option>
            </select>
            @error('estado_civil')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div> 
    </div>

    <div class="row">
        <div class="col-sm form-group input-group-sm">
            <label form="nacionalidade">Nacionalidade</label>
            <input class="form-control @error('nacionalidade') is-invalid @enderror" type="text" name="nacionalidade" placeholder="Nacionalidade" value="{{ old('nacionalidade') }}" />
            @error('nacionalidade')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
            <!--
            <label form="">Nacionalidade</label>
            <select class="form-select @error('nacionalidade') is-invalid @enderror" name="nacionalidade" id="nacionalidade" type="text" value="{{ old('nacionalidade') }}">
                <option disabled selected>Selecione a Nacionalidade</option>
                <option value="1" >Moçambicana</option>
                <option value="2" >Outra</option>
            </select>
            @error('nacionalidade')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
            -->
        </div>
        <div class="col-sm form-group input-group-sm">
            <label form="provincia_nas">Provincia</label>
            <input class="form-control @error('provincia_nas') is-invalid @enderror" type="text" name="provincia_nas" placeholder="Provincia" value="{{ old('provincia_nas') }}"/>
            @error('provincia_nas')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
            <!--
            <select class="form-select">
                <option value="Maputo Cidade">Maputo Cidade</option>
                <option value="Maputo Provincia">Maputo Provincia</option>
                <option value="Gaza">Gaza</option>
                <option value="">Inhambane</option>
                <option value="Inhambane">Sofala</option>
                <option value="Manica">Manica</option>
                <option value="Tete">Tete</option>
                <option value="Zambezia">Zambezia</option>
                <option value="Nampula">Nampula</option>
                <option value="Niassa">Niassa</option>
                <option value="Cabo Delegado">Cabo Delegado</option>   
            </select>
            -->
        </div>
        <div class="col-sm form-group input-group-sm">
            <label form="distrito_nas">Distrito</label>
            <input class="form-control @error('distrito_nas') is-invalid @enderror" type="text" name="distrito_nas" placeholder="Distrito" value="{{ old('distrito_nas') }}"/>
            @error('distrito_nas')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
            <!--
            <select class="form-select">
                <option value="Maputo Cidade" id="" class="">Maputo Cidade</option>
                <option value="2" id="" class="">Maputo Provincia</option>
                <option value="Gaza" id="" class="">Gaza</option>
                <option value="Inhambane" id="" class="">Inhambane</option>
                <option value="Sofala" id="" class="">Sofala</option>
                <option value="Manica" id="" class="">Manica</option>
                <option value="Tete" id="" class="">Tete</option>
                <option value="Zambezia" id="" class="">Zambezia</option>
                <option value="Nampula" id="" class="">Nampula</option>
                <option value="Niassa" id="" class="">Niassa</option>
                <option value="Cabo Delegado" id="" class="">Cabo Delegado</option>   
            </select>
            -->
        </div>
    </div>

    <div class="row p-1">
        <div class="form-group col-sm input-group-sm">
            <label form="bairro">Bairro</label><!-- comment -->
            <input class="form-control @error('bairro') is-invalid @enderror" type="text" name="bairro" placeholder="Bairro" value="{{ old('bairro') }}" />
            @error('bairro')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm input-group-sm">
            <label form="quart">Quarteirão</label>
            <input class="form-control @error('quart') is-invalid @enderror" type="text" name="quart" placeholder="Quarteirão"  value="{{ old('quart') }}"/>
            @error('quart')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm input-group-sm">
            <label form="rua">Rua</label><!-- comment -->
            <input class="form-control @error('rua') is-invalid @enderror" type="text" name="rua" placeholder="Rua"  value="{{ old('rua') }}"/>
            @error('rua')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm-3 input-group-sm">
            <label form="casa">Nº da Casa</label>
            <input class="form-control @error('casa') is-invalid @enderror" type="text" name="casa" placeholder="Nº da casa" value="{{ old('casa') }}"/>
            @error('casa')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>
    </div>
    <div class="row p-1">
        <div class="col-sm form-group input-group-sm">
            <label form="tipo_doc">Tipo de Documento</label>
            <select class="form-select @error('tipo_doc') is-invalid @enderror" name="tipo_doc" id="tipo_doc" type="text" value="{{ old('tipo_doc') }}">
                <option disabled selected="">Selecione o tipo de doc</option>
                <option value="BI">BI</option>
                <option value="Passaporte" id="" class="">Passaporte</option>
                <option value="Cartão de Eleitor" id="" class="">Cartão de Eleitor</option>
                <option value="Cédula" id="" class="">Cédula</option>
                <option value="DIRE" id="" class="">DIRE</option>
                <option value="Outro" id="" class="">Outros</option>
            </select>
            @error('tipo_doc')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>
        <div class="form-group col-sm input-group-sm">
            <label form="num_doc">Número do Documento</label><!-- comment -->
            <input class="form-control @error('num_doc') is-invalid @enderror" type="text" name="num_doc" placeholder="Número do Documento" value="{{ old('num_doc') }}" />
            @error('num_doc')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm input-group-sm">
            <label form="nuit">NUIT</label>
            <input class="form-control @error('nuit') is-invalid @enderror" type="text" name="nuit" placeholder="NUIT"  value="{{ old('nuit') }}"/>
            @error('nuit')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
    </div>
    <div class="row p-1">
        <div class="form-group col-sm input-group-sm">
            <label form="contacto1">Contacto</label><!-- comment -->
            <input class="form-control @error('contacto1') is-invalid @enderror" type="text" name="contacto1" placeholder="Contacto"  value="{{ old('contacto1') }}"/>
            @error('contacto1')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm input-group-sm">
            <label form="contacto2">Contacto Alten</label>
            <input class="form-control @error('contacto2') is-invalid @enderror" type="text" name="contacto2" placeholder="Contacto Altern" value="{{ old('contacto2') }}"/>
            @error('contacto2')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
        <div class="form-group col-sm input-group-sm">
            <label form="email">email</label><!-- comment -->
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="email"  style="text-transform: lowercase" value="{{ old('email') }}"/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   

    </div>
    <div class="row p-1">
        <div class="form-group- col-sm input-group-sm">
            <label form="observacao">Observação</label><!-- comment -->
            <textarea class="form-control @error('observacao') is-invalid @enderror" id="id" name="observacao" rows="4" cols="8" placeholder="Observação" value="{{ old('observacao') }}"></textarea>
            @error('observacao')
            <span class="invalid-feedback" role="alert">
                <b><i>{{$message}}</i></b>
            </span>
            @enderror
        </div>   
    </div>

    <div class="row p-4 ">
        <div class="form-group col-sm-3">
            <button type="button" class="btn btn-danger form-control text-center" border="2" data-dismiss="modal">
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
</form>


@endsection
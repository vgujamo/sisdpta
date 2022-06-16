<option>Achou {{$distritos->count() }}, seleccione</option>
@foreach($distritos as $distrito)<!-- comment -->
<option value="{{ $distrito->id }}">{{ $distrito->nome }}</option>
@endforeach
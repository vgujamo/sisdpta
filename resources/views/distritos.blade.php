<option>Achou {{$provincias->count() }}, seleccione</option>
@foreach($provincias as $provincia)<!-- comment -->
<option value="{{ $provincia->id }}">{{ $provincia->nome }}</option>
@endforeach
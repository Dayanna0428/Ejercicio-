@extends('layouts.app')
@section('content')
<h1>Crear Accidente</h1>
@if ($errors-any())
   <div> 
    <ul>
        @foreach ($errors->all() as $errors)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
   </div>
   @endif
   <form method="POST" action="{{ route('accidentes.store')}}">
    @csrf
    <label for="hora"></label>
    <input type="time" id="hora" name="hora" value="{{old('codigo')}}"><br>
    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo" value="{{ old('codigo') }}"><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}"><br>

    <label for="lugar">Lugar:</label>
    <input type="text" id="lugar" name="lugar" value="{{ old('lugar') }}"><br>

    <button type="submit">Guardar</button>
</form>
 
@endsection

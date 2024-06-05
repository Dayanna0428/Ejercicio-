@extends('layouts.app')

@section('content')
<h1>Editar Accidente</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('accidentes.update', $accidente) }}">
    @csrf
    @method('PUT')

    <label for="hora">Hora:</label>
    <input type="text" id="hora" name="hora" value="{{ old('hora', $accidente->hora) }}"><br>

    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo" value="{{ old('codigo', $accidente->codigo) }}"><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" value="{{ old('fecha', $accidente->fecha) }}"><br>

    <label for="lugar">Lugar:</label>
    <input type="text" id="lugar" name="lugar" value="{{ old('lugar', $accidente->lugar) }}"><br>

    <button type="submit">Actualizar</button>
</form>
@endsection

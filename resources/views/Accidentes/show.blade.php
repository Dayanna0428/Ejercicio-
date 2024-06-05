@extends('layouts.app')

@section('content')
<h1>Detalle del Accidente</h1>
<p><strong>Código:</strong> {{ $accidente->codigo }}</p>
<p><strong>Fecha:</strong> {{ $accidente->fecha }}</p>
<p><strong>Lugar:</strong> {{ $accidente->lugar }}</p>
<p><strong>Hora:</strong> {{ $accidente->hora }}</p>

<a href="{{ route('accidentes.index') }}">Volver</a>
@endsection

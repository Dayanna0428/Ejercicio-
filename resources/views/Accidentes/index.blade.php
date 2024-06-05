<h1>Accidentes</h1>
<a href="{{ route('accidentes.create') }}">Crear Nuevo Accidente</a>
@if ($message = Session::get('success'))
    <div>
        <strong>{{ $message }}</strong>
    </div>
@endif
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Fecha</th>
            <th>Lugar</th>
            <th>Hora</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($accidentes as $accidente)
        <tr>
            <td>{{ $accidente->codigo }}</td>
            <td>{{ $accidente->fecha }}</td>
            <td>{{ $accidente->lugar }}</td>
            <td>{{ $accidente->hora }}</td>
            <td>
                <a href="{{ route('accidentes.show', $accidente) }}">Ver</a>
                <a href="{{ route('accidentes.edit', $accidente) }}">Editar</a>
                <form action="{{ route('accidentes.destroy', $accidente) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


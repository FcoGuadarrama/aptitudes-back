
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Email</th>
        <th>Numero de control</th>
        <th>Carrera</th>
        <th>Semestre</th>
        <th>Abstracta</th>
        <th>Coord. Visión</th>
        <th>Numérica</th>
        <th>Verbal</th>
        <th>Persuasiva</th>
        <th>Mecánica</th>
        <th>Social</th>
        <th>Directiva</th>
        <th>Organización</th>
        <th>Musical</th>
        <th>Artes plásticas</th>
        <th>Espacial</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($aspirantes as $aspirante)
        <tr>
            <td>{{ $aspirante->id }}</td>
            <td>{{ $aspirante->name }}</td>
            <td>{{ $aspirante->age }}</td>
            <td>{{ $aspirante->email }}</td>
            <td>{{ $aspirante->control_number }}</td>
            <td>{{ $aspirante->current_career }}</td>
            <td>{{ $aspirante->semester }}</td>
            
            @foreach(json_decode($aspirante->results) as $result)
                <td>{{ $result }}</td>
            @endforeach
            <td>{{ \Carbon\Carbon::parse($aspirante->created_at)->format('d-m-y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

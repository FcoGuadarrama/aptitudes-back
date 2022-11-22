<style>

    @page {
        margin: 0;
    }

    body {
        margin: 3.5cm 1cm 1cm;
    }

    #watermark {
        position: fixed;
        bottom:   0;
        left:     0;
        width:    21.8cm;
        height:   28cm;
        z-index:  -1000;
    }
</style>
<div id="watermark">
    <img src="{{ 'public/images/logo.jpeg' }}" height="100%" width="100%"  alt="logo"/>
</div>
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
        <th>Resultados</th>
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
            <td>{{ $aspirante->career }}</td>
            <td>{{ $aspirante->semester }}</td>
            <td>{{ $aspirante->results }}</td>
            @foreach($aspirante->results as $result)
                <td>{{ $result }}</td>
            @endforeach
            <td>{{ \Carbon\Carbon::parse($aspirante->created_at)->format('d-m-y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

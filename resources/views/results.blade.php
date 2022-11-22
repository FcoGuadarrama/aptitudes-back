<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Reporte de resultados</title>
</head>
<body>





<div class="container">
    <nav><strong>Instituto Tecnológico de Puebla</strong></nav> <br>
    <p>Hola, {{ $aspirante->name }} {{ $aspirante->lastname }}, de numero de control: {{ $aspirante->control_number }}, cursando el semestre
    {{ $aspirante->semester }} de la carrera de {{ $aspirante->current_career }}, tu resultado es:</p> <br>
</div> <br>

<table class="table table-bordered">
    <thead>
    <tr>
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
    </tr> <br>
    </thead>
    <tbody> <br>
    <tr>
        @foreach(json_decode($aspirante->results) as $result)
            <td>{{ $result }}</td>
        @endforeach
    </tr> <br>
    </tbody> <br>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>Departamento de Desarrollo Académico</footer>

</body>
</html>

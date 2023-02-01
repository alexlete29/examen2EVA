<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado conductores</title>
</head>
<body>
    <table>
        <th>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Valoracion</td>
            <td>Kilometros</td>
        </th>
        @foreach ($drivers as $driver)
        <tr>
            <td>{{$driver->name}}</td>
            <td>{{$driver->apellidos}}</td>
            <td>{{$driver->valoracion}}</td>
            <td>{{$driver->kilometros}}</td>
        </tr>
        @endforeach 
    </table>  
</body>
</html>


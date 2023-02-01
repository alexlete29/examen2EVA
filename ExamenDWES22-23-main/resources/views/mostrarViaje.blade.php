<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar viejaes</title>
</head>
<body>
    <table>
        <th>
            <td>Origen</td>
            <td>Destino</td>
            <td>Fecha</td>
        </th>
        @foreach ($viajes as $viaje)
        <tr>
            <td>{{$viaje->origen}}</td>
            <td>{{$viaje->destino}}</td>
            <td>{{$viaje->fecha}}</td>
            <td>
                <form method="post" action="{{'guardarviaje'.$viaje->id}}">
                    <input type="text" placeholder="Introduce las plazas a reservar">
                    <input type="submit" value="Reservar">
                </form> 
                
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
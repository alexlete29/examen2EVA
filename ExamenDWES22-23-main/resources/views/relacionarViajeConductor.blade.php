<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RelacionarTripDriver</title>
</head>
<body>
    <form action="{{relacionarTripDriver}}" method="post">
        <select>
            <option value="default">Seleccionar conductores</option>
        </select>
        <select>
            <option value="default">Seleccionar viaje</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    @foreach ($drivers as $driver)
        @foreach($trips as $trip)
            <p>{{$driver->id}}</p>
            <p>{{$trip->id}}</p>
            <form action="{{eliminarRelacion.$trip->id}}" method="post">
            @method('DELETE')
                <input type="submit" value="Eliminar">
            </form>
        @endforeach
    @endforeach

</body>
</html>
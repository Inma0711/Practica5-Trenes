<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <form method="post" action="{{route('trains.update', ['train' => $train->id])}}">
        @csrf
        {{ method_field('PUT')}} 
        <label>Nombre:</label>
            <input type="text" name="name" id="name" value="{{$train->name}}"><br><br>
        <label>Pasajeros:</label>
            <input type="text" name="passengers" value="{{$train->passengers}}"><br><br>
        <label>Año:</label>
            <input type="text" name="year" value="{{$train->year}}"><br><br>
        <label>Tipo de tren:</label>
            <select name="type">
                <option hidden selected value="{{$train->type}}">{{ $train->type}}</option>
                <option value="1">Cercanias</option>
                <option value="2">Media Distancia</option>
                <option value="3">Alta Velocidad</option>
            </select>
            <br><br>
        <input type="submit" value="editar">
    </form>
</body>
</html>
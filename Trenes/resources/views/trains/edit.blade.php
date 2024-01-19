<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <option hidden selected value="{{$train->train_type->id}}">{{ $train->train_type->name}}</option>
                <option value="1">Cercanias</option>
                <option value="2">Media Distancia</option>
                <option value="3">Alta Velocidad</option>
            </select>
            <br><br>
        <input type="submit" value="editar" class="btn btn-info">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
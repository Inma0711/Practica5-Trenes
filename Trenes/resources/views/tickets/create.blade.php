<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>

    <form method="post" action="{{route('tickets.store')}}">
        @csrf
        <label>Fecha:</label>
        <input type="date" name="date"><br><br>
        <label>Precio:</label>
        <input type="text" name="price"><br><br>
    
        <label>Tren:</label>
           <select name="trains">
            @foreach ($trains as $train)
    
                <option value="{{$train->id}}">{{$train->name}}</option>
    
            @endforeach
           </select>
        <label>Tipo:</label>
        <select name="type">
            <option value="1">Billete Sencillo</option>
            <option value="2">Abono Mensual</option>
            <option value="3">Abono Trimestral</option>
        </select>
        <br><br>
        <input type="submit" value="Crear" class="btn btn-info">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
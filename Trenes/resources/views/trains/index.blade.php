<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br>
    <h1>Tabla de los trenes</h1><br><br>
   

    <div class="container">
    <p>
        <a href="{{route('trains.create')}}" class="btn btn-info">Crear Trenes</a>
        <a href="{{route('tickets.index')}}" class="btn btn-info">Ticket</a>
        <a href="{{route('traintypes.index')}}" class="btn btn-info">Tipos de Tren</a>
    </p>
    </div>

    <div class="container">
    <table border="1" class="table table-dark table-hover">
        <thead>
            <tr>
                <th> Nombres </th>
                <th> Pasajeros </th>
                <th> Año </th>
                <th> Tipo de tren </th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($trains as $train)
    <tbody>
        <tr>
            <td>  {{ $train->name }} </td>
            <td>  {{ $train->passengers }} </td>
            <td>  {{ $train->year }} </td>
            <td>  {{ $train->train_type->type}} </td>
         <td>
                <form 
                action="{{route('trains.show', ['train' => $train->id])}}"
                method="get">
                    <input type="submit" value="Ver" class="btn btn-outline-info">
                </form>
            </td>
              
            <td>
                <form 
                action="{{route('trains.edit', ['train' => $train->id])}}"
                method="get">
                    <input type="submit" value="Editar" class="btn btn-outline-warning">
                </form>
            </td>
       
            <td>
                <form method="post"
                action="{{route('trains.destroy', ['train' => $train->id])}}">
                @csrf
                {{ method_field('DELETE')}}
                    <input type="submit" value="Borrar" class="btn btn-outline-danger">
                </form>
            </td>
  
        </tr>
    @endforeach
  
    </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
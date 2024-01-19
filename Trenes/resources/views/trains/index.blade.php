<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
</head>
<body>
   
    <h1>Tabla de los trenes</h1>
   


    <p>
        <a href="{{route('tickets.create')}}">Crear Trenes</a>
    </p>
    <p>
        <a href="{{route('tickets.index')}}">Ticket</a>
    </p>
    
    <table border="1">
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
                    <input type="submit" value="Ver">
                </form>
            </td>
              
            <td>
                <form 
                action="{{route('trains.edit', ['train' => $train->id])}}"
                method="get">
                    <input type="submit" value="Editar">
                </form>
            </td>
       
            <td>
                <form method="post"
                action="{{route('trains.destroy', ['train' => $train->id])}}">
                @csrf
                {{ method_field('DELETE')}}
                    <input type="submit" value="Borrar">
                </form>
            </td>
  
        </tr>
    @endforeach
  
    </tbody>
       
</table>
</body>
</html>
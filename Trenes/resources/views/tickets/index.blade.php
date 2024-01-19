<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <br>
    <h1>Tabla de los tickets</h1> <br><br>

    <div class="container">
        <p>
           <a href="{{route('tickets.create')}}" class="btn btn-info">Crear Ticket</a>
           <a href="{{route('trains.index')}}" class="btn btn-info">Train</a>
           <a href="{{route('tickettypes.index')}}" class="btn btn-info">Tipos Ticket</a>
        </p>
    </div>

<div class="container">
    <table class="table table-dark table-hover">
    
            <thead>
                <tr>
                    <th> Fecha </th>
                    <th> Precio </th>
                    <th> Tren </th>
                    <th> Tipo de ticket </th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
        @foreach ($tickets as $ticket)
        <tbody>
            <tr>
                <td>  {{ $ticket->date }} </td>
                <td>  {{ $ticket->price }} </td>
                <td>  {{ $ticket->train->name}} </td>
                <td>  {{ $ticket->ticket_type->type}} </td>
              <td>
                    <form 
                    action="{{route('tickets.show', ['ticket' => $ticket->id])}}"
                    method="get">
                        <input type="submit" value="Ver" class="btn btn-outline-info">
                    </form>
                </td>
                <td>
                    <form 
                    action="{{route('tickets.edit', ['ticket' => $ticket->id])}}"
                    method="get">
                        <input type="submit" value="Editar" class="btn btn-outline-warning">
                    </form>
                </td>
                    
                <td>
                    <form method="post"
                    action="{{route('tickets.destroy', ['ticket' => $ticket->id])}}">
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
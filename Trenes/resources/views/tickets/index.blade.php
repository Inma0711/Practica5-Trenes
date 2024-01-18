<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>
<body>
    <h1>Tabla de los tickets</h1>

    
        <p>
            <a href="{{route('tickets.create')}}">Crear Ticket</a>
        </p>
        
    
    <p>
        <a href="{{route('trains.index')}}">Train</a>
    </p>

        <table border="1">
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
                        <input type="submit" value="Ver">
                    </form>
                </td>
            
                <td>
                    <form 
                    action="{{route('tickets.edit', ['ticket' => $ticket->id])}}"
                    method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                    
                <td>
                    <form method="post"
                    action="{{route('tickets.destroy', ['ticket' => $ticket->id])}}">
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
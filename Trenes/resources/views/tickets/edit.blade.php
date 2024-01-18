<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <form method="post" action="{{route('tickets.update', ['ticket' => $ticket->id])}}">
        @csrf
        {{ method_field('PUT')}} 
        <label>Fecha:</label>
            <input type="date" name="date" id="date" value="{{$ticket->date}}"><br><br>
        <label>Precio:</label>
            <input type="text" name="price" value="{{$ticket->price}}"><br><br>
        <label>Tren:</label>
           <select name="trains">
            @foreach ($trains as $train)
            <option hidden selected value="{{$ticket->train->name}}">{{ $ticket->train->name}}</option>
                <option value="{{$train->id}}">{{$train->name}}</option>
    
            @endforeach
           </select>
        <label>Tipo:</label>
            <select name="type">
                <option hidden selected value="{{$ticket->type}}">{{ $ticket->type}}</option>
                <option value="1">Billete Sencillo</option>
                <option value="2">Abono Mensual</option>
                <option value="3">Abono Trimestral</option>
            </select>
            <br><br>
        <input type="submit" value="editar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista</title>
</head>
<body>
    <h1>Ver Ticket</h1>
    <p>Fecha: {{ $ticket->date }}</p>
    <p>Precio: {{ $ticket->price }}</p>
    <p>Tren: {{ $ticket->train->name }}</p>
    <p>Tipo de ticket: {{ $ticket->ticket_type->type}}</p>
</body>
</html>
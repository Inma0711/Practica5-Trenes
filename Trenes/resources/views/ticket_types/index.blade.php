<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Tipos Ticket</title>
</head>
<body>
    <div class="container">
    <h1>Tipos de ticket</h1>
    <ul class="list-group"">
        @foreach($ticket_types as $ticket_type)
            <li class="list-group-item">{{ $ticket_type->type }}</li>
            <ul class="list-group"> 
                @php
                $tickets = $ticket_type -> tickets;
                @endphp
                @foreach($tickets as $ticket)
                <li class="list-group-item">{{ $ticket -> price }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
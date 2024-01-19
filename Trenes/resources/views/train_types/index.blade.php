<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Tipos Tren</title>
</head>
<body>
    <div class="container">
    <h1>Tipos de Tren</h1>
    <ul>
        @foreach($train_types as $train_type)
            <li class="list-group-item">{{ $train_type->type }}</li>
            <ul class="list-group">
                @php
                $trains = $train_type -> trains;
                @endphp
                @foreach($trains as $train)
                <li class="list-group-item">{{ $train -> name }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
</div>
</body>
</html>
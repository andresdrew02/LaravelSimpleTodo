<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viendo todo</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>
    <h1>Viendo todo {{$todo->id}}</h1>
    <div class="container">
        <ul>
            <li>Contenido: {{$todo->content}}</li>
            <li>Completado: @if ($todo->done == 1)
                ✅
                @else
                ❌
                @endif
            </li>
            <li>Creado: {{date('d/m/Y', strtotime($todo->created_at))}}</li>
            <li>Actualizado: {{date('d/m/Y', strtotime($todo->updated_at))}}</li>
        </ul>
            <a href="/">Volver atrás</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando todo</title>
    <!-- Styles -->
    <link rel="stylesheet" href="/css/pico.css">
</head>
<body>
    <h1>Editando todo</h1>
    <div class="container" style="margin-bottom: 2rem">
        <a href="/">Volver atrás</a>
    </div>
    <form action="{{ route('updateTodo', $todo->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="container">
            <label for="content">Contenido</label>
            <input type="text" name="content" id="content" value="{{ $todo->content }}"/>
            <input type="submit" value="Editar">
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple TODO</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/pico.css">

    </head>
    <body class="antialiased">
        <div id="app" class="container-fluid">
            <h1>Todo List</h1>
            <form method="POST" action="{{ route('addTodo',) }}">
                {{ csrf_field() }}
                <label for="todo">Agrega un todo: </label>
                <input type="text" name="todo" id="todo">
                <input type="submit" value="Agregar">
            </form>
            <form method="POST" action="{{route('deleteAll')}}">
                {{ csrf_field() }}
                @method('delete')
                <input type="submit" value="Borrar Todos los todos">
            </form>
        </div>
        <div class="container">
            <h2>Lista de to-dos</h2>
            <ul>
                @foreach ($todos as $todo)
                    <input id="todo{{ $todo->id }}" type="text" disabled value="{{ $todo->content }} @if ($todo->done == 1) ✅ @else ❌ @endif"/>
                    <div style="display:flex; flex-direction:row; gap: 1rem;">
                        <form method="POST" action="{{ route('markCompleted', $todo->id) }}">
                            {{ csrf_field() }}
                            <input type="submit" @if ($todo->done == 1)
                                value="Marcar como pendiente"
                            @else
                                value="Marcar como completado"
                            @endif class="contrast" style="max-width: 16rem">
                        </form>
                        <form method="POST" action="{{ route('deleteTodo', $todo->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <input type="submit" value="Borrar todo" style="max-width:10rem"/>
                        </form>
                        <form method="GET" action="{{ route('editTodo', $todo->id) }}">
                            <input type="submit" value="Editar" style="max-width: 5rem">
                        </form>
                        <form method="GET" action="{{ route('viewTodo', $todo->id)}}">
                            <input type="submit" value="Ver Detalles" style="max-width: 15rem" class="secondary">
                        </form>
                    </div>
                @endforeach
            </ul>
        </div>
    </body>
</html>

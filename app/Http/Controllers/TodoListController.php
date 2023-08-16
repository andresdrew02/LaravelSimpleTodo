<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoListController extends Controller
{
    public function saveItem(Request $request)
    {
        $newTodo = new Todo;
        $newTodo->content = $request->todo;
        $newTodo->done = false;
        $newTodo->save();
        return redirect("/");
    }
    
    public function getTodos()
    {
        $todos = Todo::all();
        return view('welcome', ['todos' => $todos]);
    }

    public function markCompleted($id)
    {
        $todo = Todo::find($id);
        $todo->done = !$todo->done;
        $todo->save();
        return redirect("/");
    }

    public function deleteTodo($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect("/");
    }

    public function editTodo($id)
    {
        $todo = Todo::find($id);
        return view('editTodo', ['todo' => $todo]);
    }

    public function updateTodo($id, Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);
        $todo = Todo::find($id);
        $todo->content = $data['content'];
        $todo->save();
        return redirect("/");
    }

    public function viewTodo($id)
    {
        $todo = Todo::find($id);
        \Log::info(json_encode($todo));
        return view('viewTodo', ['todo' => $todo]);
    }

    public function deleteAll()
    {
        Todo::truncate();
        return redirect("/");
    }

}

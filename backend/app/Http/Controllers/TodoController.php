<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $group = request()->input('group', 'all');

        $todos = Todo::select(['id', 'task', 'completed']);
        if ($group !== 'all') {
            $todos->whereCompleted($group === 'completed' ? 1 : 0);
        }

        return response()->json($todos->get());
    }

    public function create()
    {
        $data = $this->validate(request(), [
            'task' => 'required|max:250',
        ]);

        $data['completed'] = 0;

        $todo = Todo::create($data);

        return response()->json($todo);
    }

    public function update(Todo $todo)
    {
        $data = $this->validate(request(), [
            'task' => 'required|max:250'
        ]);

        $todo->task = $data['task'];
        $todo->save();

        return response()->json($todo);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return response()->json(null, 204);
    }

    public function toggleCompleted(Todo $todo)
    {
        $todo->completed = !$todo->completed;
        $todo->save();

        return response()->json($todo);
    }
}

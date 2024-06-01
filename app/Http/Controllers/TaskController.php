<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // dapatkan data tugas dari Model
    public function index(){
        $tasks = Task::getAll();

        // mengirim data tugas ke view
        return view('task.index',[
            'tasks' => $tasks
        ]);
    }


public function show($id)
    {
        $task = collect(Task::getAll())->firstWhere('id', $id);

        if (!$task) {
            abort(404, 'Task not found');
        }

        return view('task.show', compact('task'));
    }
}

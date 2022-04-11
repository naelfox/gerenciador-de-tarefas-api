<?php

namespace App\Http\Controllers;



//importando o model e o resource
use App\Models\Task as Task;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class TaskController extends Controller
{
      //realizando a paginação
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        Task::create($request->all());
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
       $task = Task::findOrFail($id);
       $task->update($request->all());
    }

    public function destroy($id)
    {
       $task = Task::findOrFail($id);
       $task->delete();
    }
}

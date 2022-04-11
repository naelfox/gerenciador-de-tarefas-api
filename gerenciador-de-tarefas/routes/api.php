<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// listar tarefas
Route::get('task', [TaskController::class, 'index']);

//Listar apenas uma tarefa
Route::get('task/{id}', [TaskController::class, 'show']);


//criando um nova tarefa
Route::post('task', [TaskController::class, 'store']);

// atualizar a tarefa
Route::put('task/{id}', [TaskController::class, 'update']);
// Deletar a tarefa
Route::delete('task/{id}', [TaskController::class,'destroy']);

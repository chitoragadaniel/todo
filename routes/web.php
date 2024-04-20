<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);
Route::put('/', [TaskController::class, 'store']);
Route::get('/{task}', [TaskController::class, 'show']);
Route::patch('/{task}/done', [TaskController::class, 'done']);
Route::delete('/{task}', [TaskController::class, 'delete']);

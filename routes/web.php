<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[TodoListController::class, 'getTodos'])->name(("getTodos"));

Route::get("/editTodo/{id}", [TodoListController::class, "editTodo"])->name("editTodo");

Route::get("/viewTodo/{id}", [TodoListController::class, "viewTodo"])->name("viewTodo");

Route::post("/addTodo", [TodoListController::class, "saveItem"])->name("addTodo");

Route::post("/markCompleted/{id}", [TodoListController::class, "markCompleted"])->name("markCompleted");

Route::delete("/deleteTodo/{id}", [TodoListController::class, "deleteTodo"])->name("deleteTodo");

Route::put("/updateTodo/{id}", [TodoListController::class, "updateTodo"])->name("updateTodo");

Route::delete('/deleteAll', [TodoListController::class, 'deleteAll'])->name('deleteAll');
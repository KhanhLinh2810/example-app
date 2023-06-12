<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo.com/items/viewall',  [App\Http\Controllers\ItemController::class, "viewall"]);
Route::post('/todo.com/items/add',  [App\Http\Controllers\ItemController::class, "add"]);
Route::get('todo.com/items/view/{id}/{name}',  [App\Http\Controllers\ItemController::class, "view"]);
Route::delete('todo.com/items/delete/{id}', [App\Http\Controllers\ItemController::class, "delete"]);


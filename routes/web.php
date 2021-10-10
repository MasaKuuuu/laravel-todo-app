<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// // resources/views 配下の hello.php を表示
// Route::get('/hello', function () {
//     return view('hello');
// });

// resources/views 配下の hello.php にパラメータを渡す
Route::get('/hello/{name}', function ($name) {
    return view('hello',['name' => $name]);
});

// resources/views 配下の hello.php を表示
Route::get('/hello', [HelloController::class, 'index']);

// Todoアプリ
Route::get('/todo', [TodoController::class, 'index']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/edit', [TodoController::class, 'edit']);
Route::get('/todo/delete', [TodoController::class, 'delete']);
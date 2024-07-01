<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TaskController;

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
})->name('logout');

// Route::get('/list', function () {
//     return view('welcome');
// });

Route::get('/list', [TodoListController::class, 'index']);

Route::resource('/tasks', TaskController::class);

Route::get('/top', function () {
    return view('top'); // この行を編集
});

// この行を追加
Route::get('/home', 'HomeController@index')->name('home');

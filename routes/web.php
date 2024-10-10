<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function(){
//    return view('index');
//});

Route::get('/',[TaskController::class, 'fetchAllTasks'])->name('index');

Route::get('/create',[TaskController::class, 'createTask'])->name('create');

Route::post('/addTask',[TaskController::class, 'addTask'])->name('addTask');
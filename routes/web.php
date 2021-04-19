<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// data bases  laste 2 viedo

Route::get('tasks',function(){

    $tasks = DB::table('tasks')->get();
    return view('task',compact('tasks'));
});

Route::get('tasks/show/{id}', function($id){

    $task = DB::table('tasks')->where('id', $id)->first();

    return view('show',compact('task'));
});



/*
Route::get('/about', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::post('/store', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::get('/task', function () {
    $tasks = [
        'first-task'=>'task 1',
        'seconde-task'=>'task 2',
        'third-task'=>'task 3'
    ];
    // $tasks = [
    //     'task 1',
    //     'task 2',
    //     'task 3'
    // ];
    return view('task', compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task'=>'task 1',
        'seconde-task'=>'task 2',
        'third-task'=>'task 3'
    ];
    $task = $tasks[$id];
    return view('show',compact('task'));
});
*/


/*
Route::get('/about',function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::post('/store', function () {
    $name = request('name');
    return view('about', compact('name'));
});
*/

<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('todo', function () {
     $tasks=DB::table('tasks') ->orderBy('title', 'ascending') ->get();
    return view('todo', compact('tasks'));
});

Route::post('store', function (Request $request) {
     DB::table('tasks')->insert([

          'title' => $request->title
     ]);

    return redirect()->back();
});








/*
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








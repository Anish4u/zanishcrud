<?php

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

// Route::resource('task', 'TaskController');


Route::get('/', function()
{
	return View::make('welcome');

});;


Route::get('/tasks','TaskController@index' );

Route::get('/tasks/create','TaskController@create');

Route::post('/tasks','TaskController@store');

Route::get('/tasks/{id}/edit','TaskController@edit' );


 	Route::patch('/tasks/{id}','TaskController@update');
//
 Route::get('/tasks/{id}','TaskController@show');

Route::delete('/tasks/{id}','TaskController@destroy');

// Route::post('/tasks/{task}/comments','CommentsController@store');









// Route::get('/', function () {
//     $taskList=DB::table('tasks')->get();
//     //dd($taskList);
//     return view('welcome',compact('taskList'));
// });
//
// Route::get('/tasks/{ta}',function ($id)
// {
//     $task1=DB::table('tasks')->find($id);
//
//     //dd($task1);
//
//
//     return view('tasks.show',compact('task1'));
// });
//
// Route::get('/create', function () {
//
//     return view('tasks.create');
// });
// //
// // Route::post('/', function () {
// //     return view('tasks.create');
// // });
//
//
// //
// // Route::get('/task', 'TaskController@index');
// // Route::get('/edit', 'TaskController@edit');
// // Route::get('/show', 'TaskController@show');
//
// Route::resource('/task', 'TaskController');

// i created

//Route::resource('task', 'TaskController');
// Route::get('task','TaskController@index');
// Route::get('task/{id}','TaskController@store');

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/new', [
    'uses' => 'PagesController@new'
]);

// show all todo
Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

// create todo in db
Route::post('/create/todo', [
    'uses' => 'TodosController@store'
]);

// delete todo
Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

// Form data passing for update todo
Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

// update todo
Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todo.save'
]);

// todo completed
Route::get('/todo/completed/{id}', [
    'uses' => 'TodosController@completed',
    'as' => 'todo.completed'
]);


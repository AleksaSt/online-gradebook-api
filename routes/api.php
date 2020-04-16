<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'LoginController@authenticate');
Route::post('/register', 'RegisterController@store');
Route::get('/gradebooks', 'GradebooksController@index');
Route::get('/professors', 'ProfessorsController@index');
Route::post('/gradebooks/create', 'GradebooksController@store');
Route::get('/professors/free', 'ProfessorsController@getFreeProfessors');
Route::get('/gradebooks/free', 'GradebooksController@getFreeGradebooks');
Route::post('/professors/create', 'ProfessorsController@store');
Route::get('/myGradebook/{id}', 'GradebooksController@getMyGradebook');
Route::get('professors/single/{id}', 'ProfessorsController@getSingleProfessor');
Route::get('/gradebooks/all', 'GradebooksController@getAllGradebooks');
Route::post('students/create', 'StudentsController@store');
Route::get('/gradebooks/single/{id}', 'GradebooksController@show');
Route::post('/comments/create', 'CommentsController@store');
Route::delete('/comments/delete/{id}', 'CommentsController@delete');
Route::patch('/gradebooks/edit/{id}', 'GradebooksController@edit');














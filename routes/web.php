<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('home', [CrudController::class, 'data']);
Route::get('crud/add', [CrudController::class, 'add']);
Route::post('crud', [CrudController::class, 'addproses']);
Route::patch('crudedit/{id}', [CrudController::class, 'editproses']);
Route::patch('ps/{id}', [CrudController::class, 'ps']);
Route::get('crud/detail/{id}', [CrudController::class, 'detail']);
Route::get('crud/edit/{id}', [CrudController::class, 'edit']);
Route::delete('crud/destroys/{id}', [CrudController::class, 'destroy']);

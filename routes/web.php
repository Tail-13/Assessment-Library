<?php

use App\Http\Controllers\authorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/author', [authorController::class, 'index']);
Route::get('/author/add-form', function(){
    return view('authors.addForm');
});
Route::get('/author/edit/{id}', [authorController::class, 'editForm']);
Route::get('/author/delete/{id}', [authorController::class, 'deleteForm']);

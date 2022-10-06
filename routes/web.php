<?php

use App\Http\Controllers\BrandControllers;
use App\Http\Controllers\NotebookControllers;
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

Route::resource('/pages', NotebookControllers::class);
Route::resource('/notebooks', NotebookControllers::class);
Route::get('/notebookedit', [NotebookControllers::class, 'index2']);

Route::resource('/brands', BrandControllers::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

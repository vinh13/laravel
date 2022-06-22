<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/index', [StudentController::class, 'index'])->name('index');

Route::get('/add', [StudentController::class, 'create'])->name('add');

Route::post('/store', [StudentController::class, 'store'])->name('store');

Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');

Route::post('/update/{student}',  [StudentController::class, 'update'])->name('update');

Route::delete('/delete/{student}', [StudentController::class, 'destroy'])->name('delete');

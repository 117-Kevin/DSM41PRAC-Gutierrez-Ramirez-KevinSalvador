<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersController;

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


//resources

//Route::get('mirutaapiG',[SubjectsController::class, 'index'])->name('subject.store');
//Route::post('mirutaapiP',[SubjectsController::class, 'index'])->name('subject');
//Route::put('mirutaapiPU',[SubjectsController::class, 'index'])->name('subject');
//Route::delete('mirutaapiD',[SubjectsController::class, 'index'])->name('subject');

Route::resource('groups',GroupsController::class);
Route::resource('subject',SubjectsController::class);
Route::resource('students',StudentsController::class);
Route::resource('teachers',TeachersController::class);

//route::post('/store', [SubjectsController::class, 'store'])->name('subject.store');
//route::post('/store', [SubjectsController::class, 'store'])->name('subject.store');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Tag;
use App\Http\Livewire\Project;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::group(['prefix'=>'tags','as'=>'tags'], function() {
     Route::get('/', Tag::class)->name('tags');
});

Route::group(['prefix'=>'projects','as'=>'projects'], function() {
     Route::get('/', Project::class)->name('projects');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\datapuntController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\popcontroller;
use App\Http\Controllers\NulsituatieController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/pop', [popcontroller::class, 'popHome'])->name('popHome');
Route::get('/pop/afspraken', [popcontroller::class, 'afspraken'])->name('afspraken');

Route::get('/pop/midterm', [popcontroller::class, 'midterm'])->name('midterm');
Route::get('/pop/reflectie', [popcontroller::class, 'reflectie'])->name('reflectie');

Route::get('/pop/nulsituatie', [NulsituatieController::class, 'nulSituatie'])->name('nulsituatie');
Route::post('/', [NulsituatieController::class, 'update'])->name('nulsituatie.edit');

Route::get('/pop/datapunt', [datapuntController::class, 'index'])->name('datapunt');
Route::post('/pop/datapunt/save', [datapuntController::class, 'emptyDatapunt'])->name('emptyDatapunt');
Route::get('/pop/GetNiveausAgainstCompetentieDrop/{id}', [datapuntController::class, 'GetNiveausAgainstCompetentieDrop'])->name('loadNiveauData');
Route::get('/pop/GetIndicatorAgainstNiveau/{pop}', [datapuntController::class, 'GetIndicatorAgainstNiveau'])->name('loadIndicator');
Route::post('/pop/datapunt/saveDatapoint{id}', [datapuntController::class, 'saveDatapoint'])->name('saveDatapoint');

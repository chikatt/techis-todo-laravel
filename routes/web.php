<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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

Route::get('/quiz', function () {
    return view('question.quiz');
});


Route::get('/quiz2', [QuizController::class, 'index']);

Route::get('/quiz3', [QuizController::class, 'show']);

Route::get('/quiz4', [QuizController::class, 'quiz4_show']);

Route::get('/quiz5', [QuizController::class, 'login']);

Route::get('/quiz6_main', function () {
    return view('common.main');
});

Route::get('/quiz6', [QuizController::class, 'quiz6_show'])->name('quiz6_test');

Route::get('/quiz7', [QuizController::class, 'quiz7_show']);


Route::get('/quiz8', [QuizController::class, 'quiz8_redirect']);

Route::get('/quiz9/{id}', [QuizController::class, 'quiz9_show']);

Route::get('/quiz9/{id}', [QuizController::class, 'quiz9_show'])->name('quiz9_test');

Route::post('/quiz9/{id}', [QuizController::class, 'quiz9_show']);

Route::get('/quiz10', [QuizController::class, 'quiz10_show']);

Route::post('/quiz10/store', [QuizController::class, 'quiz10_store']);

Route::get('/quiz11', [QuizController::class, 'quiz11_show']);

Route::get('/quiz11/get', [QuizController::class, 'quiz11_show_get']);

Route::get('/quiz12/{id}', [QuizController::class, 'quiz12_show'])->name('quiz12_test');

Route::put('/quiz12/{id}', [QuizController::class, 'quiz12_update'])->name('quiz12_update');

Route::delete('/quiz12/{id}', [QuizController::class, 'quiz12_delete'])->name('quiz12_test3');

Auth::routes();




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
Route::post('/create', [App\Http\Controllers\TaskController::class, 'create']);
Route::post('/delete/{taskid}', [App\Http\Controllers\TaskController::class, 'delete']);
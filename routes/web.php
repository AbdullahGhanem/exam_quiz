<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\StudyGuideController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuizController::class, 'home'])->name('quiz.home');
Route::post('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');
Route::get('/quiz/question/{index}', [QuizController::class, 'question'])->name('quiz.question');
Route::post('/quiz/answer/{index}', [QuizController::class, 'answer'])->name('quiz.answer');
Route::get('/quiz/result', [QuizController::class, 'result'])->name('quiz.result');

Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::post('/subjects', [SubjectController::class, 'store'])->name('subjects.store');
Route::put('/subjects/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
Route::get('/subjects/assign', [SubjectController::class, 'assign'])->name('subjects.assign');
Route::post('/subjects/assign', [SubjectController::class, 'assignUpdate'])->name('subjects.assign.update');

Route::get('/study', [StudyGuideController::class, 'index'])->name('study.index');
Route::get('/study/{lecture}', [StudyGuideController::class, 'show'])->name('study.show');

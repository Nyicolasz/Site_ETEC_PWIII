<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Teste', function () {
    return view('Teste');
});

Route::get('/SJ', function () {
    return view('SJ');
});

Route::get('/LOG', function () {
    return view('LOG');
});

Route::get('/Adm', function () {
    return view('Adm');
});

Route::get('/RH', function () {
    return view('RH');
});

Route::get('/CONT', function () {
    return view('CONT');
});

Route::get('/DS', function () {
    return view('DS');
});

Route::get('/Historia', function () {
    return view('Historia');
});

Route::get('/Infraestrutura', function () {
    return view('Infraestrutura');
});

Route::get('/APM', function () {
    return view('APM');
});

Route::get('/Cordenacao', function () {
    return view('Cordenacao');
});

Route::get('/Direcao', function () {
    return view('Direcao');
});

Route::get('/Oportunidades', function () {
    return view('Oportunidades');
});

Route::get('/Vestibulinho', function () {
    return view('Vestibulinho');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

// routes/web.php



use App\Http\Controllers\PortfolioController;

use App\Http\Controllers\CompetenceController;

use Illuminate\Support\Facades\Route;



Route::get('/', [PortfolioController::class, 'accueil'])->name('accueil');

Route::get('/apropos', [PortfolioController::class, 'apropos'])->name('apropos');



Route::resource('competences', CompetenceController::class);


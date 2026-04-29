<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| HOME PAGE
|--------------------------------------------------------------------------
*/
Route::get('/', [ProjectController::class, 'index']);

/*
|--------------------------------------------------------------------------
| PROJECTS LIST
|--------------------------------------------------------------------------
*/
Route::get('/projects', [ProjectController::class, 'projects']);

/*
|--------------------------------------------------------------------------
| SINGLE PROJECT
|--------------------------------------------------------------------------
*/
Route::get('/projects/{slug}', [ProjectController::class, 'show']);

/*
|--------------------------------------------------------------------------
| OTHER PAGES
|--------------------------------------------------------------------------
*/
Route::view('/about', 'portfolio.pages.about');
Route::view('/contact', 'portfolio.pages.contact');
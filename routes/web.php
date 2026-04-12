<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/tenders', function () {
    return view('tenders');
})->name('tenders');

Route::get('/news', function () {
    return view('news');
})->name('news');

// Service Pages
Route::prefix('services')->group(function () {
    Route::get('/construction', function () { return view('service-pages.service-construction'); })->name('services.construction');
    Route::get('/architecture', function () { return view('service-pages.service-architecture'); })->name('services.architecture');
    Route::get('/finishes', function () { return view('service-pages.service-finishes'); })->name('services.finishes');
    Route::get('/civil', function () { return view('service-pages.service-civil'); })->name('services.civil');
    Route::get('/equipment', function () { return view('service-pages.service-equipment'); })->name('services.equipment');
});

// Project Pages
Route::prefix('projects')->group(function () {
    Route::get('/villa-sanaa', function () { return view('project-pages.project-villa-sanaa'); })->name('projects.villa-sanaa');
    Route::get('/building-taiz', function () { return view('project-pages.project-building-taiz'); })->name('projects.building-taiz');
    Route::get('/complex-marib', function () { return view('project-pages.project-complex-marib'); })->name('projects.complex-marib');
    Route::get('/warehouse-hodeida', function () { return view('project-pages.project-warehouse-hodeida'); })->name('projects.warehouse-hodeida');
});

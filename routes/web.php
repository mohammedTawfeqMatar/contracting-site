<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/', function () {
    return view('site.index');
})->name('home');

Route::get('/about', function () {
    return view('site.about');
})->name('about');

Route::get('/services', function () {
    return view('site.services');
})->name('services');

Route::get('/projects', function () {
    return view('site.projects');
})->name('projects');

Route::get('/contact', function () {
    return view('site.contact');
})->name('contact');

Route::get('/login', function () {
    return view('site.login');
})->name('login');

Route::get('/careers', function () {
    return view('site.careers');
})->name('careers');

Route::get('/tenders', function () {
    return view('site.tenders');
})->name('tenders');

// مسار قائمة الأخبار الرئيسية
Route::get('/news', function () {
    return view('site.news');
})->name('news');

// مسار تفاصيل الخبر الفرعي (عرض ثابت)
Route::get('/news/{slug}', function ($slug) {
    return view('site.sub-pages.news-details', ['slug' => $slug]);
})->name('news.details');

// Service Details Route
Route::get('/services/{slug}', function ($slug) {
    return view('site.sub-pages.service-details', ['slug' => $slug]);
})->name('services.details');

// Project Details Route
Route::get('/projects/{slug}', function ($slug) {
    return view('site.sub-pages.project-details', ['slug' => $slug]);
})->name('projects.details');

// Job Application Route
Route::get('/careers/apply/{job_id}', function ($job_id) {
    return view('site.sub-pages.job-application', ['job_id' => $job_id]);
})->name('careers.apply');

// Tender Request Route
Route::get('/tenders/request/{tender_id}', function ($tender_id) {
    return view('site.sub-pages.tender-request', ['tender_id' => $tender_id]);
})->name('tenders.request');


// Service Pages
Route::get('service-details',(function () {
    return view('site.sub-pages.service-details');
}))->name('services.construction');

// Project Pages
Route::prefix('projects-details')->group(function () {
    return view('site.sub-pages.service-details');
})->name('services.construction');


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
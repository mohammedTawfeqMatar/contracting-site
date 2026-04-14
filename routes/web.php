<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- واجهات الموقع العام (Site Routes) ---
Route::get('/', function () { return view('site.index'); })->name('home');
Route::get('/about', function () { return view('site.about'); })->name('about');
Route::get('/services', function () { return view('site.services'); })->name('services');
Route::get('/projects', function () { return view('site.projects'); })->name('projects');
Route::get('/contact', function () { return view('site.contact'); })->name('contact');
Route::get('/login', function () { return view('site.login'); })->name('login');
Route::get('/careers', function () { return view('site.careers'); })->name('careers');
Route::get('/tenders', function () { return view('site.tenders'); })->name('tenders');
Route::get('/news', function () { return view('site.news'); })->name('news');

// مسارات التفاصيل للموقع العام
Route::get('/news/{slug}', function ($slug) { return view('site.sub-pages.news-details', ['slug' => $slug]); })->name('news.details');
Route::get('/services/{slug}', function ($slug) { return view('site.sub-pages.service-details', ['slug' => $slug]); })->name('services.details');
Route::get('/projects/{slug}', function ($slug) { return view('site.sub-pages.project-details', ['slug' => $slug]); })->name('projects.details');
Route::get('/careers/apply/{job_id}', function ($job_id) { return view('site.sub-pages.job-application', ['job_id' => $job_id]); })->name('careers.apply');
Route::get('/tenders/request/{tender_id}', function ($tender_id) { return view('site.sub-pages.tender-request', ['tender_id' => $tender_id]); })->name('tenders.request');

// --- واجهات لوحة التحكم (Admin Dashboard Routes) ---
Route::prefix('admin')->name('admin.')->group(function () {
    
    // الصفحة الرئيسية للوحة التحكم
    Route::get('/', function () { return view('admin.dashboard'); })->name('dashboard');

    // إعدادات الموقع
    Route::get('/settings', function () { return view('admin.settings.index'); })->name('settings.index');
    Route::put('/settings', function () { return back()->with('success', 'تم تحديث الإعدادات بنجاح (تجريبي)'); })->name('settings.update');

    // إدارة الصفحات
    Route::get('/pages', function () { return view('admin.pages.index'); })->name('pages.index');
    Route::get('/pages/create', function () { return view('admin.pages.create'); })->name('pages.create');
    Route::post('/pages', function () { return redirect()->route('admin.pages.index'); })->name('pages.store');

    // إدارة الخدمات
    Route::get('/services', function () { return view('admin.services.index'); })->name('services.index');
    Route::get('/services/create', function () { return view('admin.services.create'); })->name('services.create');
    Route::post('/services', function () { return redirect()->route('admin.services.index'); })->name('services.store');

    // إدارة المشاريع
    Route::get('/projects', function () { return view('admin.projects.index'); })->name('projects.index');
    Route::get('/projects/create', function () { return view('admin.projects.create'); })->name('projects.create');
    Route::post('/projects', function () { return redirect()->route('admin.projects.index'); })->name('projects.store');

    // إدارة الأخبار
    Route::get('/news', function () { return view('admin.news.index'); })->name('news.index');
    Route::get('/news/create', function () { return view('admin.news.create'); })->name('news.create');
    Route::post('/news', function () { return redirect()->route('admin.news.index'); })->name('news.store');

    // إدارة المناقصات
    Route::get('/tenders', function () { return view('admin.tenders.index'); })->name('tenders.index');
    Route::get('/tenders/create', function () { return view('admin.tenders.create'); })->name('tenders.create');
    Route::post('/tenders', function () { return redirect()->route('admin.tenders.index'); })->name('tenders.store');

    // إدارة الرسائل والطلبات
    Route::get('/contacts', function () { return view('admin.contacts.index'); })->name('contacts.index');
    Route::get('/contacts/{id}', function ($id) { return view('admin.contacts.show', ['id' => $id]); })->name('contacts.show');
});

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
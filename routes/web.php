<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SearchController as AdminSearchController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TenderController as AdminTenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- واجهات الموقع العام (Site Routes) ---
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/services/{slug}', [SiteController::class, 'serviceDetails'])->name('services.details');
Route::get('/projects', [SiteController::class, 'projects'])->name('projects');
Route::get('/projects/{slug}', [SiteController::class, 'projectDetails'])->name('projects.details');
Route::get('/news', [SiteController::class, 'news'])->name('news');
Route::get('/news/{slug}', [SiteController::class, 'newsDetails'])->name('news.details');
Route::get('/careers', [SiteController::class, 'careers'])->name('careers');
Route::get('/careers/apply/{jobId}', [SiteController::class, 'jobApply'])->name('careers.apply');
Route::get('/tenders', [SiteController::class, 'tenders'])->name('tenders');
Route::get('/tenders/request/{tenderId}', [SiteController::class, 'tenderRequest'])->name('tenders.request');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/login', function () { return view('site.login'); })->name('login');
Route::get('/pages/{slug}', [SiteController::class, 'page'])->name('pages.show');
Route::get('/search', [SiteController::class, 'search'])->name('search');

Route::post('/contact', [ContactRequestController::class, 'storeGeneral'])->name('contact.store');
Route::post('/services/{service}/request', [ContactRequestController::class, 'storeServiceRequest'])->name('services.request');
Route::post('/careers/{job}/apply', [ContactRequestController::class, 'storeJobApplication'])->name('careers.apply.store');
Route::post('/tenders/{tender}/request', [ContactRequestController::class, 'storeTenderRequest'])->name('tenders.request.store');

// --- واجهات لوحة التحكم (Admin Dashboard Routes) ---
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
    Route::put('/settings/{setting}', [SettingController::class, 'update'])->name('settings.update');
    Route::delete('/settings/{setting}', [SettingController::class, 'destroy'])->name('settings.destroy');

    Route::resource('pages', PageController::class)->except(['show']);
    Route::resource('services', AdminServiceController::class)->except(['show']);
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::resource('news', AdminNewsController::class)->except(['show']);
    Route::resource('tenders', AdminTenderController::class)->except(['show']);
    Route::resource('jobs', JobController::class)->except(['show']);

    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::patch('/contacts/{contact}/read', [AdminContactController::class, 'markAsRead'])->name('contacts.read');
    Route::delete('/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

    Route::get('/search', AdminSearchController::class)->name('search');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::patch('/notifications/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.read-all');
    Route::patch('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
});

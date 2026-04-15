<?php

namespace App\Providers;

use App\Events\ContactRequestSubmitted;
use App\Listeners\SendAdminContactNotification;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(ContactRequestSubmitted::class, SendAdminContactNotification::class);

        View::composer('site.*', function ($view) {
            $settings = Setting::query()
                ->get()
                ->mapWithKeys(fn ($setting) => [$setting->key => $setting->parseValue()]);

            $view->with('siteSettings', $settings);
        });

        View::composer('admin.*', function ($view) {
            $adminUser = User::query()->first();

            $view->with('adminUnreadNotificationsCount', $adminUser?->unreadNotifications()->count() ?? 0);
            $view->with('adminLatestNotifications', $adminUser?->notifications()->latest()->limit(5)->get() ?? collect());
        });
    }
}

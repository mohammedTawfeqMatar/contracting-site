<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $user = User::query()->first();

        $notifications = $user
            ? $user->notifications()->latest()->paginate(20)
            : collect();

        return view('admin.notifications.index', compact('notifications'));
    }

    public function markAsRead(string $id)
    {
        $user = User::query()->first();

        if ($user) {
            $notification = $user->unreadNotifications()->where('id', $id)->first();
            if ($notification) {
                $notification->markAsRead();
            }
        }

        return back()->with('success', 'تم تعليم الإشعار كمقروء.');
    }

    public function markAllAsRead()
    {
        $user = User::query()->first();
        if ($user) {
            $user->unreadNotifications->markAsRead();
        }

        return back()->with('success', 'تم تعليم جميع الإشعارات كمقروءة.');
    }
}

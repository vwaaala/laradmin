<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $notifications = auth()->user()->unreadNotifications;

        return view('home', compact('notifications'));
    }

    public function markNotification(Request $request): Response
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}

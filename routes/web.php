<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function (){
    return view('pages.portfolio.home');
});
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('home');
    Route::post('/mark-as-read', [\App\Http\Controllers\Admin\HomeController::class,'markNotification'])->name('markNotification');
    // Permissions
    Route::delete('permissions/destroy', [\App\Http\Controllers\Admin\PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [\App\Http\Controllers\Admin\RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', \App\Http\Controllers\Admin\RolesController::class);

    // Users
    Route::delete('users/destroy', [\App\Http\Controllers\Admin\UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', \App\Http\Controllers\Admin\UsersController::class);
});

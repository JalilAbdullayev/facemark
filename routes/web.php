<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteController;
use App\Http\LocaleMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

$locale = Request::segment(1);

if(in_array($locale, ['en', 'ru'])) {
    $locale = Request::segment(1);
} else {
    $locale = '';
}

Route::group(['prefix' => $locale, function($locale = null) {
    return $locale;
}, 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => LocaleMiddleware::class
], function() {
    Route::controller(SiteController::class)->group(function() {
        Route::get('/', 'index')->name('home');
    });
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/', AdminController::class)->name('index');
    Route::controller(SettingController::class)->name('settings')->prefix('settings')->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'update');
    });
    Route::controller(ProfileController::class)->prefix('profile')->name('profile.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
        Route::post('changepass', 'changePass')->name('changepass');
        Route::get('delete', 'delete')->name('delete');
    });
});

Auth::routes();

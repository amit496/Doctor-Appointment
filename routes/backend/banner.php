<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;


Route::prefix('admin')->controller(BannerController::class)->group(function () {
    Route::get('banner/list', 'banner_list')->name('banner.list');
    Route::post('banner/add', 'banner_add')->name('banner.add');
});


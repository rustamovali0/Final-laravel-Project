<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\PageHomeController;

// Frontend Routes
Route::group(['middleware'=>'setting'], function(){
    Route::get('/', [PageHomeController::class,'index'])->name('index');

    Route::get('/about', [PageController::class,'about'])->name('about');

    Route::get('/services', [PageController::class,'service'])->name('services');

    Route::get('/products', [PageController::class,'products'])->name('products');
    Route::get('/products/{slug}', [PageController::class,'proDetails'])->name('proDetails');

    Route::get('/blog', [PageController::class,'blog'])->name('blog');

    Route::get('/contact', [PageController::class,'contact'])->name('contact');
    Route::post('/contact/save', [AjaxController::class,'contactForm'])->name('contact.form');

    Route::get('/form', [PageController::class,'form'])->name('form');
});

// Backend (Panel) Routes
Route::group(['middleware'=>'panelsetting', 'prefix'=>'panel'], function(){
    Route::get('/', [DashboardController::class,'index'])->name('panel');
    Route::get('/slider', [SliderController::class,'index'])->name('slider.index');
    Route::get('/slider/add', [SliderController::class,'create'])->name('slider.create');
    Route::get('/slider/{id}/edit', [SliderController::class,'edit'])->name('slider.edit');
    Route::post('/slider/store', [SliderController::class,'store'])->name('slider.store');
    Route::put('/slider/{id}/update', [SliderController::class,'update'])->name('slider.update');
    Route::delete('/slider/{id}', [SliderController::class,'destroy'])->name('slider.destroy');


    Route::get('/setting', [SettingController::class,'index'])->name('setting.index');
    Route::post('/setting/store', [SettingController::class,'store'])->name('setting.store');
    Route::get('/setting/{id}/edit', [SettingController::class,'edit'])->name('setting.edit');
    Route::put('/setting/{id}/update', [SettingController::class,'edit'])->name('setting.update');

});

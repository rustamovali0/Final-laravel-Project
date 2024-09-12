<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\PageHomeController;


// Frontend Routes
Route::group(['middleware' => 'setting'], function() {
    Route::get('/', [PageHomeController::class, 'index'])->name('index');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [PageController::class, 'service'])->name('services');
    Route::get('/products', [PageController::class, 'products'])->name('products');
    Route::get('/products/{slug}', [PageController::class, 'proDetails'])->name('proDetails');
    Route::get('/blog', [PageController::class, 'blog'])->name('blog');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

    Route::post('/contact/save', [ContactController::class, 'store'])->name('contact.form');

    Route::get('/form', [PageController::class, 'form'])->name('form');
});

// Backend (Panel) Routes
Route::group(['middleware' => 'panelsetting', 'prefix' => 'panel'], function() {
    Route::get('/', [SliderController::class, 'index'])->name('panel');

    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/add', [SliderController::class, 'create'])->name('slider.create');
    Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::put('/slider/{id}/update', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::get('/setting/create', [SettingController::class, 'create'])->name('setting.create');
    Route::post('/setting/store', [SettingController::class, 'store'])->name('setting.store');
    Route::get('/setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('/setting/{id}/update', [SettingController::class, 'update'])->name('setting.update');
    Route::delete('/setting/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');

    Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::resource('products', ProductController::class);

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
    Route::resource('blogs', BlogController::class);


    Route::resource('about', AboutController::class);


});

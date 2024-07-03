<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\{Home, Shop, Blog, About, Contact};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Home::class)->name('index');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/about', About::class)->name('about');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/contact', Contact::class)->name('contact');

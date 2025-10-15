<?php

use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\ProductsPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\CategoriesPage;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/categories', CategoriesPage::class)->name('categories-page');
Route::get('/products', ProductsPage::class)->name('products-page');

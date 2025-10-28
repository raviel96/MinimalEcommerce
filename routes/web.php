<?php

use App\Livewire\Pages\CartPage;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\ProductsPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\CategoriesPage;
use App\Livewire\Pages\ProductDetailPage;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/categories', CategoriesPage::class)->name('categories-page');
Route::get('/products', ProductsPage::class)->name('products-page');
Route::get('/products/{product}', ProductDetailPage::class)->name('product-detail-page');
Route::get('/cart', CartPage::class)->name('cart-page');

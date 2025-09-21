<?php

use App\Livewire\Pages\CategoriesPage;
use App\Livewire\Pages\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/categories', CategoriesPage::class)->name('categories-page');


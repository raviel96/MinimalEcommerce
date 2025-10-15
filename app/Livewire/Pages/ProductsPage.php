<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProductsPage extends Component
{

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    #[Computed(cache: true)]
    public function products() {
        return Product::all();
    }

    public function render()
    {
        return view('livewire.pages.products-page');
    }
}

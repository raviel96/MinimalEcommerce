<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProductsPage extends Component
{

    public $categories;

    public $selectedCategories = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

    #[Computed(cache: true)]
    public function filterProducts() {

        $data = Product::when(count($this->selectedCategories), function($query) {
            $query->whereIn('category_id', $this->categories->whereIn('name', $this->selectedCategories)->pluck('id'));
        })->get();

        return $data;
    }

    public function render()
    {

        return view('livewire.pages.products-page', ['filteredProducts' => $this->filterProducts()]);
    }
}

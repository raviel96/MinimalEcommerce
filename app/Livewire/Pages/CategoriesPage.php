<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CategoriesPage extends Component
{
    public $categories;

    public function mount() {
        $this->categories = Category::all();
    }
    
    public function render()
    {
        return view('livewire.pages.categories-page');
    }
}

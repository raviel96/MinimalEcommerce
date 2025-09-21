<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HomePage extends Component
{
    #[Computed(cache: true)]
    public function categories() {
        return Category::all();
    }

    public function render()
    {
        return view('livewire.pages.home-page');
    }
}

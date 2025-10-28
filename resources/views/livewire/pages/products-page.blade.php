<div class="products-page">
    <div class="product-container">
        <div class="filters">
             <div class="category-filter">
                <h2>Categories</h2>
                <ul>
                    @foreach($this->categories as $category)
                        <li>
                            <input type="checkbox" id="{{ $category->name }}" value="{{ $category->name }}" wire:model.live="selectedCategories">
                            <label for="{{ $category->name }}">{{ $category->name }}</label>
                        </li>
                    @endforeach
                </ul>
             </div>
        </div>
        <div class="products-list" wire:loading>
            @foreach ($filteredProducts as $product)
                <livewire:components.product-item :product="$product" :key="$product->id"/>
            @endforeach  
        </div>
    </div>
</div>

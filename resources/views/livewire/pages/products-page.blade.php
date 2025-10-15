<div class="products-page">
    <div class="product-container">
        <div class="filters">
             <div>
                <label for="category">Category:</label>
                <select id="category" wire:model="selectedCategory">
                    <option value="">All</option>
                    @foreach($this->categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
             </div>
        </div>
        <div class="products-list">
            @foreach($this->products as $product)
                <livewire:components.product-item :product="$product" :key="$product->id"/>
            @endforeach
        </div>
    </div>
</div>

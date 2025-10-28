<div>
    <div>
        <div></div>
        <div>
            <div>
                <h2>{{ $product->name }}</h2>
                <p>${{ $product->price }}</p>
            </div>
            <div>
                <p>Quantity</p>
                <input type="number" min="1" wire:model="quantity" value="1"/>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
</div>

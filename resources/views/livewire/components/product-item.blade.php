<a href="/products/{{ $product }}" class="product-item">
    <div class="product-image">
        <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}" width="200" height="250"/>
    </div>
    <div class="product-details">
        <h3 class="product-name">{{ $product->name }}</h3>
        <p class="product-price">${{ number_format($product->price, 2) }}</p>
    </div>
    <button class="add-to-cart">Add to Cart</button>
</a>
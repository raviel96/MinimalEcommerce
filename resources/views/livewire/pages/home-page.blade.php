<div class="home-page">
    {{-- Hero section --}}
    <section class="hero">
        <div class="hero-content">
            <h1>Start your journey with Minimal E-Commerce</h1>
            <p>Purchase wide varieties of electronics products like Smartphones, Laptops or Smarwatches.</p>
            <div>
                <button type="button">Get started</button>
                <button type="button">Contact sales team</button>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-image.png') }}" alt="Hero Image">
        </div>
    </section>

    {{-- Category section --}}
    <section class="category">
        <header class="category-header">
            <h2>Browse Categories</h2>
            <p>Explore our wide range of categories to find the perfect product for you.</p>
        </header>
        <div class="category-list">
            @foreach($this->categories as $category)
                <div class="category-item">
                    {{-- <img src="{{ asset('images/categories/' . $category->image) }}" alt="{{ $category->name }} category"> --}}
                    <h3>{{ $category->name }}</h3>
                </div>
            @endforeach
        </div>
    </section>
</div>

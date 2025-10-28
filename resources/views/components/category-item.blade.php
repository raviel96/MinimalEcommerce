<a href="#" class="category-item">
    <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }} Image">
    <div class="category-info">
        <p>{{ $category->name }}</p>
        <i class="fa fa-chevron-right"></i>
    </div>
</a>
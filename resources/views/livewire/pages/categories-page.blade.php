<div class="categories">
    @foreach($categories as $category)
        <x-category-item :category="$category" />
    @endforeach
</div>

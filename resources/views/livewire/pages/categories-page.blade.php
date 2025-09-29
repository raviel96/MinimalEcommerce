<div class="categories">
    <div class="category-list">
        @foreach($categories as $category)
            <x-category-item :category="$category"/>
        @endforeach
    </div>
</div>

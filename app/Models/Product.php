<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Fillables
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
    ];

    /**
     * Get the category that owns the product.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Category, Product>
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
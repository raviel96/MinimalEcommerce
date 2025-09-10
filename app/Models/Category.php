<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'is_active',
    ];

    /**
     * Get the products for the category.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Product, Category>
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

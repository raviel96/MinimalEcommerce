<?php

namespace App\Models;

use App\Events\CategoryDeleted;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image',
        'is_active',
    ];

    protected $dispatchesEvents = [
        'deleted' => CategoryDeleted::class,
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title', 'description', 'content', 'preview_image',
        'price', 'count', 'is_published', 'category_id'
    ];

    // Связь многие ко многим с Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    // Связь многие ко многим с Color
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_products');
    }
}

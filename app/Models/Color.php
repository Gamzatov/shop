<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = [
        'title'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'color_products');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function variants() {
        return $this->hasMany(Variant::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
    public function images() {
        return $this->hasMany(ProductImage::class);
    }
}

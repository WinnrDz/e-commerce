<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
     protected $fillable = [
        'added_price',
        'product_id',
        'color_id',
        'size_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function color() {
        return $this->belongsTo(Color::class);
    }

    public function size() {
        return $this->belongsTo(Size::class);
    }

    public function carts() {
        return $this->belongsToMany(Cart::class)
                    ->withPivot('quantity');
    }

    public function price() {
        return $this->product->base_price + $this->added_price;
    }
}

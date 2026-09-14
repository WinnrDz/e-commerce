<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function variants () {
        return $this->belongsToMany(Variant::class)
                    ->withPivot('quantity');
    }

    public function subtotal()
    {
        return $this->variants->sum(function ($variant) {
            return $variant->price() * $variant->pivot->quantity;
        });
    }
}
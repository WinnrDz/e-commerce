<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "user_id",
        "status",
        "total",
        "delivery_fee"
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function variants() 
    {
        return $this->belongsToMany(Variant::class)
                    ->withPivot(['quantity','price']);
    }
}

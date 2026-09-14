<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\Models\Variant;

class Show extends Component
{
    public $product;
    public $color_id;
    public $size_id;

    public $cart;
    public $variant;
    public $quantity = 1;

    public function selectColor($id)
    {
        $this->color_id = $id;
    }


    public function selectSize($id)
    {
        $this->size_id = $id;
    }

    public function addQuantity() {
        $this->quantity += 1;
    }

    public function subQuantity() {
        $this->quantity -= 1;
        if ($this->quantity < 1) $this->quantity = 1;
    }


    public function addVariant() {
        $this->variant = Variant::where('color_id',$this->color_id)
                                ->where('size_id', $this->size_id)
                                ->where('product_id', $this->product->id)
                                ->first();

        $this->cart->variants()->attach($this->variant->id, [
            'quantity' => $this->quantity
        ]);
    }

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->cart = \App\Models\Cart::FindOrFail(1);
    }

    public function render()
    {
        return view('livewire.show', [
            "colors" => Color::whereHas('variants', function ($q) {
                return $q->where('product_id', $this->product->id);
            })->get(),
            "sizes" => Size::whereHas('variants', function ($q) {
                return $q->where('product_id', $this->product->id);
            })->get(),
        ]);
    }
}

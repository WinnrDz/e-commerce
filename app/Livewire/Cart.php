<?php

namespace App\Livewire;

use Livewire\Component;
use livewire\Attributes\Layout;
use App\Models\Variant;

#[Layout('layouts::app')]
class Cart extends Component
{
    public $cart;
    public $variant_id;


    public function removeVariant($id) {
        $this->cart->variants()->detach($id);
    }

    public function addQuantity($id) {
        $variant = $this->cart->variants()->where('id',$id)->first();

        $quantity = $variant->pivot->quantity;

        $quantity += 1;

        $this->cart->variants()->updateExistingPivot(
            $variant->id,
            ['quantity' => $quantity]
        );
    }

    public function subQuantity($id) {
        $variant = $this->cart->variants()->where('id',$id)->first();

        $quantity = $variant->pivot->quantity;

        $quantity -= 1;

        if ($quantity < 1) $quantity = 1;

        $this->cart->variants()->updateExistingPivot(
            $variant->id,
            ['quantity' => $quantity]
        );
    }

    public function mount()
    {
        $this->cart = \App\Models\Cart::FindOrFail(1);
    }
    
    public function render()
    {
        return view('livewire.cart');
    }
}

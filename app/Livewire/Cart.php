<?php

namespace App\Livewire;

use Livewire\Component;
use livewire\Attributes\Layout;

#[Layout('layouts::app')]
class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = \App\Models\Cart::FindOrFail(1);
    }
    
    public function removeVariant($id) {
        $this->cart->variants()->detach($id);
    }

    public function render()
    {
        return view('livewire.cart');
    }
}

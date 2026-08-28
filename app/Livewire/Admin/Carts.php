<?php

namespace App\Livewire\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Cart;

#[Layout('layouts::admin')]
class Carts extends Component
{
    public function create()
    {
        $this->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        Cart::create([
            'user_id' => $this->user_id,
        ]);

        session()->flash('success', 'Cart created successfully!');

        $this->reset(['user_id']);
    }
    public function render()
    {
        return view('livewire.admin.carts');
    }
}

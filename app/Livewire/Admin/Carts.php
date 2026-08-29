<?php

namespace App\Livewire\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Cart;
use App\Models\User;

#[Layout('layouts::admin')]
class Carts extends Component
{   
    public $editing = false;
    public $user_id;

    public $showing = false;
    public $cart;
    public $user;

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

    public function edit($id)
    {
        $cart = Cart::findOrFail($id);
        $this->user_id = $cart->user_id;
        $this->editing = true;
    }

    public function update($id)
    {
        $this->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $cart = Cart::findOrFail($id);
        $cart->update([
            'user_id' => $this->user_id,
        ]);

        session()->flash('success', 'Cart updated successfully!');

        $this->reset(['user_id']);
        $this->editing = false;
    }
    public function delete(Cart $cart)
    {
        $cart->delete();

        session()->flash('success', 'Cart deleted successfully!');
    }

    public function show($id)
    {
        $cart = Cart::findOrFail($id);
        $this->cart = $cart;
        $this->user = $cart->user;
        $this->showing = true;
    }

    public function render()
    {
        return view('livewire.admin.carts',[
            'carts' => Cart::all(),
            'users' => User::all(),
        ]);
    }
}

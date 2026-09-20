<?php

namespace App\Livewire;

use Livewire\Component;
use livewire\Attributes\Layout;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

#[Layout('layouts::app')]
class Cart extends Component
{
    public $cart;
    public $variant_id;

    public $order_id;

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

    public function createOrder() {
        if ($this->cart->variants->isEmpty()) {
            return;
        }

        DB::transaction(function () {

            $order = Order::create([
                'user_id' => 1,
                'total' => $this->cart->subtotal(),
            ]);

            $variants = [];

            foreach ($this->cart->variants as $variant) {
                $variants[$variant->id] = [
                    'quantity' => $variant->pivot->quantity,
                    'price' => $variant->price()
                ];
            }

            $order->variants()->attach($variants);

            $this->cart->variants()->detach();

            $this->cart->refresh();

            $this->order_id = $order->id;

            session()->flash('success', 'Order created successfully!');
        });
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

<?php

namespace App\Livewire;

use Livewire\Component;

class Order extends Component
{   
    public $order;

    public function mount($orderId) {
        $this->order = \App\Models\Order::where('id',$orderId)->first();
    }

    public function render()
    {
        return view('livewire.order');
    }
}

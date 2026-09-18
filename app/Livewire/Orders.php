<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts::app')]
class Orders extends Component
{
    public function render()
    {
        return view('livewire.orders',[
            "orders" => Order::all()
        ]);
    }
}

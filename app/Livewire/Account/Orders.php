<?php

namespace App\Livewire\Account;

use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts::account')]
class Orders extends Component
{
    public function render()
    {
        return view('livewire.account.orders',[
            "orders" => Order::all()
        ]);
    }
}

<?php

namespace App\Livewire\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Order;
use App\Models\User;

#[Layout('layouts::admin')]
class Orders extends Component
{
    public $user_id;
    public $status;
    public $total;

    public $editing = false;

    public $showing = false;
    public $order;
    public $user;

    public function create()
    {
        $this->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled',
            'total' => 'required|numeric|min:0',
        ]);

        Order::create([
            'user_id' => $this->user_id,
            'status' => $this->status,
            'total' => $this->total
        ]);

        session()->flash('success', 'Order created successfully!');

        $this->reset(['user_id', 'status', 'total']);
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $this->user_id = $order->user_id;
        $this->status = $order->status;
        $this->total = $order->total;
        $this->editing = true;
    }

    public function update($id)
    {
        $this->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled',
            'total' => 'required|numeric|min:0',
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'user_id' => $this->user_id,
            'status' => $this->status,
            'total' => $this->total,
        ]);

        session()->flash('success', 'Order updated successfully!');

        $this->reset(['user_id', 'status', 'total']);
        $this->editing = false;
    }
    public function delete(Order $order)
    {
        $order->delete();

        session()->flash('success', 'Order deleted successfully!');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        $this->order = $order;
        $this->user = $order->user;
        $this->showing = true;
    }

    public function render()
    {
        return view('livewire.admin.orders',[
            'orders' => Order::all(),
            'users' => User::all(),
        ]);
    }
}



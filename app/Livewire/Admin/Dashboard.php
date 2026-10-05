<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Layout;
use App\Models\Order;


#[Layout('layouts::admin')]
class Dashboard extends Component
{
    public $totalSales; 
    public $ordersCount;
    public $productsCount;

    public function delete(Product $product)
    {
        $product->delete();
        
    }

    public function mount()
    {
        $this->totalSales = Order::sum('total');
        $this->ordersCount = Order::count();
        $this->productsCount = Product::count();
    }


    public function render()
    {
        return view('livewire.admin.dashboard', [
            'products' => Product::with('category')->get(),
        ]);
    }
}
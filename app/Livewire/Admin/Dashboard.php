<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class Dashboard extends Component
{

    public function delete(Product $product)
    {
        $product->delete();
    }


    public function render()
    {
        return view('livewire.admin.dashboard', [

            'products' => Product::with('category')->get(),

            'totalProducts' => Product::count()

        ]);
    }
}
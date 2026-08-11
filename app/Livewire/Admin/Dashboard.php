<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Layout;


#[Layout('layouts::admin')]
class Dashboard extends Component
{

    public function delete(Product $product)
    {
        $product->delete();
        
    }


    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
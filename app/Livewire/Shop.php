<?php

namespace App\Livewire;

use Livewire\Component;
use livewire\Attributes\Layout;
use App\Models\Product;


#[Layout('layouts::app')]
class Shop extends Component
{
    public $minInput = 50;
    public $maxInput = 400;

    public function render()
    {
        return view('livewire.shop', [
            'products' => Product::whereBetween('base_price',[$this->minInput, $this->maxInput],'and',false)->get(),
        ]);
    }
}

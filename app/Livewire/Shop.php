<?php

namespace App\Livewire;

use App\Models\Color;
use Livewire\Component;
use livewire\Attributes\Layout;
use App\Models\Product;
use App\Models\Variant;

#[Layout('layouts::app')]
class Shop extends Component
{
    public $minInput = 50;
    public $maxInput = 400;
    public $color;

    public function selectColor($id)
    {
        $this->color = Color::find($id);
    }

    public function render()
    {
        return view('livewire.shop', [
            'products' => Product::whereBetween('base_price', [$this->minInput, $this->maxInput])
            ->get(),
            'colors' => Color::all(),
        ]);
    }
}

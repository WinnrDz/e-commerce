<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;

class Show extends Component
{
    public $product;
    public $color_id;
    public $size_id;

    public function selectColor($id)
    {
        $this->color_id = $id;
    }


    public function selectSize($id)
    {
        $this->size_id = $id;
    }

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.show', [
            "colors" => Color::whereHas('variants', function ($q) {
                return $q->where('product_id', $this->product->id);
            })->get(),
            "sizes" => Size::whereHas('variants', function ($q) {
                return $q->where('product_id', $this->product->id);
            })->get(),
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Livewire\Admin\Variants;
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

    public $color_ids = [];

    public function selectColor($id)
    {
        if (in_array($id, $this->color_ids)) {
            $this->color_ids = array_diff($this->color_ids, [$id]);
        } else {
            $this->color_ids[] = $id;
        }
    }

    public function render()
    {
        return view('livewire.shop', [
            'products' => Product::whereBetween('base_price',[$this->minInput, $this->maxInput])
            ->when($this->color_ids, function ($query) {
                $query->whereHas('variants', function ($query) {
                    $query->whereIn('color_id', $this->color_ids);
                });
            })
            ->get(),

            'colors' => Color::all(),
        ]);
    }
}

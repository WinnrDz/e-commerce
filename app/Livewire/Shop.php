<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Color;
use Livewire\Component;
use livewire\Attributes\Layout;
use App\Models\Product;
use App\Models\Size;
use Livewire\WithPagination;

#[Layout('layouts::app')]
class Shop extends Component
{
    use WithPagination;

    public $minInput = 50;
    public $maxInput = 400;

    public $color_ids = [];
    public $size_ids = [];
    public $category_ids = [];


    public function selectColor($id)
    {
        if (in_array($id, $this->color_ids)) {
            $this->color_ids = array_diff($this->color_ids, [$id]);
        } else {
            $this->color_ids[] = $id;
        }
    }

    public function selectSize($id)
    {
        if (in_array($id, $this->size_ids)) {
            $this->size_ids = array_diff($this->size_ids, [$id]);
        } else {
            $this->size_ids[] = $id;
        }
    }

    public function selectCategory($id)
    {
        if (in_array($id, $this->category_ids)) {
            $this->category_ids = array_diff($this->category_ids, [$id]);
        } else {
            $this->category_ids[] = $id;
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
            ->when($this->size_ids, function($query) {
                $query->whereHas('variants', function ($query) {
                    $query->whereIn('size_id', $this->size_ids);
                });
            })->when($this->category_ids, function ($query) {
                $query->whereHas('category', function($query) {
                    $query->whereIn('id',$this->category_ids);
                });
            })
            ->paginate(9),

            'categories' => Category::all(),
            'colors' => Color::all(),
            'sizes' => Size::all()
        ]);
    }
}

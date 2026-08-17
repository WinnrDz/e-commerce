<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts::admin')]
class Variants extends Component
{
    public $color_name = '';
    public $hex_code ;

    public function createColor() {
        Color::create([
            'name' => $this->color_name,
            'hex_code' => $this->hex_code
        ]);
    }
    
    public function render()
    {
        return view('livewire.admin.variants',[
            "products" => Product::all(),
            "categories" => Category::all()
        ]);
    }
}

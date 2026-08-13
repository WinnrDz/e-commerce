<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts::admin')]
class Products extends Component
{

    public $name = "";
    public $category_id;
    public $description = "";

    public function create()
    {
        Product::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description
        ]);
    }


    public function render()
    {
        return view('livewire.admin.products',[
            "categories" => Category::all(),
        ]);
    }
}

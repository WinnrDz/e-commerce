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

    public $product_id;

    public function create()
    {
        Product::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description
        ]);
    }

    public function delete(Product $product)
    {
        $product->delete();
    }

    public function render()
    {
        return view('livewire.admin.products',[
            "products" => Product::all(),
            "categories" => Category::all()
        ]);
    }
}

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
    public $editing = false;

    public $product;

    public function create()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'category_id' => 'required',
            'description' => ''
        ]);

        Product::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description
        ]);

        session()->flash('success', 'Product updated successfully!');

        $this->reset(['name', 'category_id', 'description','editing']);
    }

    public function delete(Product $product)
    {
        $product->delete();
    }

    public function edit($id) {
        $this->editing = true;
        $this->product = Product::findOrFail($id);

        $this->name = $this->product->name;
        $this->category_id = $this->product->category_id;
        $this->description = $this->product->description;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'category_id' => 'required',
            'description' => ''
        ]);

        $this->product->update([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description
        ]);

        session()->flash('success', 'Product updated successfully!');

        $this->reset(['name', 'category_id', 'description','editing']);
    }


    public function render()
    {
        return view('livewire.admin.products',[
            "products" => Product::all(),
            "categories" => Category::all()
        ]);
    }
}

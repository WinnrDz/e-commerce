<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts::admin')]
class Products extends Component
{
    use WithFileUploads;

    public $name = "";
    public $category_id;
    public $description = "";

    public $editing = false;
    public $product;

    public $images = [];

    public function save()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'images.*' => 'image|max:5120',
        ]);


        if (!$this->editing) {

            $product = Product::create([
                'name' => $this->name,
                'category_id' => $this->category_id,
                'description' => $this->description,
            ]);

            $message = 'Product created successfully!';
        }

        else {

            $product = $this->product;

            $product->update([
                'name' => $this->name,
                'category_id' => $this->category_id,
                'description' => $this->description,
            ]);

            $message = 'Product updated successfully!';
        }

        foreach ($this->images as $image) {

            $path = $image->store(
                "products/{$product->id}",
                'public'
            );

            ProductImage::create([
                'product_id' => $product->id,
                'path' => $path,
            ]);
        }

        session()->flash('success', $message);

        $this->reset([
            'name',
            'category_id',
            'description',
            'editing',
            'product',
            'images',
        ]);
    }

    public function delete(Product $product)
    {
        /*
        |--------------------------------------------------------------------------
        | Delete product images from storage
        |--------------------------------------------------------------------------
        */

        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->path);
        }

        /*
        |--------------------------------------------------------------------------
        | Delete product
        |--------------------------------------------------------------------------
        */

        $product->delete();
    }

    public function edit($id)
    {
        $this->editing = true;

        $this->product = Product::findOrFail($id);

        $this->name = $this->product->name;
        $this->category_id = $this->product->category_id;
        $this->description = $this->product->description;

        $this->images = [];
    }

        public function removeAllImages(Product $product)
    {
        $this->images = [];
        $product->images()->delete();
    }

    public function render()
    {
        return view('livewire.admin.products', [
            'products' => Product::all(),
            'categories' => Category::all(),
        ]);
    }
}
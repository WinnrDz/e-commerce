<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Size;
use App\Models\Variant;


#[Layout('layouts::admin')]
class Variants extends Component
{
    public $color_name = '';
    public $hex_code ;
    public $color_id;
    public $editingColors = false;

    public $size_name = '';
    public $size_id;
    public $editingSizes = false;

    public $variant;
    public $product_id;
    public $price;
    public $editingVariants = false;

    public function createVariant() {
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'color_id' => 'required|exists:colors,id',
            'size_id' => 'required|exists:sizes,id',
            'price' => 'required|numeric|min:0',
        ]);
        Variant::create([
            'product_id' => $this->product_id,
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
            'price' => $this->price,
        ]);

        session()->flash('variant_created', 'Variant created successfully.');

        $this->reset(['product_id', 'color_id', 'size_id', 'price']);
    }

    public function editVariant($id) {
        $variant = Variant::find($id);
        $this->variant = $variant;
        $this->product_id = $variant->product_id;
        $this->color_id = $variant->color_id;
        $this->size_id = $variant->size_id;
        $this->price = $variant->price;
        $this->editingVariants = true;
    }

    public function updateVariant() {
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'color_id' => 'required|exists:colors,id',
            'size_id' => 'required|exists:sizes,id',
            'price' => 'required|numeric|min:0',
        ]);
        $this->variant->update([
            'product_id' => $this->product_id,
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
            'price' => $this->price,
        ]);

        session()->flash('variant_updated', 'Variant updated successfully.');
        $this->reset(['variant', 'product_id', 'color_id', 'size_id', 'price']);
        $this->editingVariants = false;
    }

    public function deleteVariant(Variant $variant) {
        $variant->delete();
    }

    public function createColor() {
        $this->validate([
            'color_name' => 'required|string|max:255',
            'hex_code' => 'required|string|max:7|regex:/^#[0-9A-Fa-f]{6}$/'
        ]);
        Color::create([
            'name' => $this->color_name,
            'hex_code' => $this->hex_code
        ]);

        session()->flash('color_created', 'Color created successfully.');

        $this->reset(['color_name', 'hex_code']);
    }

    public function editColor($id) {
        $color = Color::find($id);
        $this->color_id = $color->id;
        $this->color_name = $color->name;
        $this->hex_code = $color->hex_code;
        $this->editingColors = true;
    }

    public function updateColor() {
        $this->validate([
            'color_name' => 'required|string|max:255',
            'hex_code' => 'required|string|max:7|regex:/^#[0-9A-Fa-f]{6}$/'
        ]);
        $color = Color::find($this->color_id);
        $color->update([
            'name' => $this->color_name,
            'hex_code' => $this->hex_code
        ]);

        session()->flash('color_updated', 'Color updated successfully.');
        $this->reset(['color_name', 'hex_code', 'color_id']);
        $this->editingColors = false;
    }
    public function deleteColor(Color $color) {
        $color->delete();
    }


    public function createSize() {
        $this->validate([
            'size_name' => 'required|string|max:255',
        ]);
        Size::create([
            'name' => $this->size_name,
        ]);

        session()->flash('size_created', 'Size created successfully.');

        $this->reset(['size_name']);
    }

    public function deleteSize(Size $size) {
        $size->delete();
    }

    public function editSize($id) {
        $size = Size::find($id);
        $this->size_id = $size->id;
        $this->size_name = $size->name;
        $this->editingSizes = true;
    }

    public function updateSize() {
        $this->validate([
            'size_name' => 'required|string|max:255',
        ]);
        $size = Size::find($this->size_id);
        $size->update([
            'name' => $this->size_name,
        ]);

        session()->flash('size_updated', 'Size updated successfully.');
        $this->reset(['size_name', 'size_id']);
        $this->editingSizes = false;
    }
    
    public function render()
    {
        return view('livewire.admin.variants',[
            "variants" => Variant::all(),
            "sizes" => Size::all(),
            "colors" => Color::all(),
            "products" => Product::all(),
            "categories" => Category::all()
        ]);
    }
}

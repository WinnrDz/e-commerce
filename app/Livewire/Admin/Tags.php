<?php

namespace App\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts::admin')]
class Tags extends Component
{
    public $name;
    public $editing = false;
    public $tag;

    public $product_ids = [];

    

    public function store()
    {  
        $this->validate([
            'name' => 'required|min:3|max:255',
        ]);

        $tag = Tag::create([
            'name' => $this->name
        ]);

        if (!empty($this->product_ids)) {
            $tag->products()->attach($this->product_ids);
        }

        session()->flash('success', 'Tag created successfully!');

        $this->reset(['name']);
    }

    public function delete(Tag $tag)
    {
        $tag->delete();
    }

    public function edit($id)
    {
        $this->editing = true;
        $this->tag = Tag::findOrFail($id);
        $this->name = $this->tag->name;
        $this->product_ids = $this->tag->products()->pluck('products.id')->toArray();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
        ]);

        $this->tag->update([
            'name' => $this->name
        ]);

        if (!empty($this->product_ids)) {
            $this->tag->products()->sync($this->product_ids);
        } else {
            $this->tag->products()->detach();
        }

        session()->flash('success', 'Tag updated successfully!');

        $this->reset(['name', 'tag', 'editing']);
    }


    public function render()
    {
        return view('livewire.admin.tags',[
            'tags' => Tag::all(),
            'products' => \App\Models\Product::all()
        ]);
    }
}

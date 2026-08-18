<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Category;


#[Layout('layouts::admin')]
class Categories extends Component
{
    public $name;
    public $editing = false;
    public $category;

    

    public function store()
    {
        Category::create([
            'name' => $this->name
        ]);

        $this->reset(['name']);
    }

    public function delete(Category $category)
    {
        $category->delete();
    }

    public function edit($id)
    {
        $this->editing = true;
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;
    }

    public function update()
    {
        $this->category->update([
            'name' => $this->name
        ]);

        $this->reset(['name', 'category', 'editing']);
    }


    public function render()
    {
        return view('livewire.admin.categories',[
            'categories' => Category::all(),
        ]);
    }
}

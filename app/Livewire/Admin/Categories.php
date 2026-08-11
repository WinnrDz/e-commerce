<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Category;


#[Layout('layouts::admin')]
class Categories extends Component
{
    public $name;

    public function create()
    {
        Category::create([
            'name' => $this->name
        ]);
    }


    public function render()
    {
        return view('livewire.admin.categories',[
            'categories' => Category::all(),
        ]);
    }
}

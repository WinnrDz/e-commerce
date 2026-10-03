<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Tag;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts::welcome')]
class Welcome extends Component
{
    public function render()
    {
        $newproducts = Product::whereHas('tags', function ($query) {
            $query->where('name', 'new');
        })->get();
        $newtag = Tag::where('name','new')->first();

        $sellingproducts = Product::whereHas('tags', function ($query) {
            $query->where('name', 'Best Seller');
        })->get();
        $sellingtag = Tag::where('name','Best Seller')->first();

        return view('livewire.welcome', compact('newproducts','newtag','sellingproducts','sellingtag'));
    }
}

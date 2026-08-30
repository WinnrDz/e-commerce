<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;

#[Layout('layouts::admin')]
class Reviews extends Component
{
    public $review;
    public $rating;
    public $user_id;
    public $product_id;

    public $editing = false;
    public $review_id;

    public function create()
    {
        $this->validate([
            'review' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        Review::create([
            'review' => $this->review,
            'rating' => $this->rating,
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
        ]);

        $this->reset(['review', 'rating', 'user_id', 'product_id']);

        session()->flash('success', 'Review created successfully.');
    }
    public function edit($id)
    {
        $review = Review::findOrFail($id);

        $this->editing = true;
        $this->review_id = $review->id;
        $this->review = $review->review;
        $this->rating = $review->rating;
        $this->user_id = $review->user_id;
        $this->product_id = $review->product_id;
    }

    public function update()
    {
        $this->validate([
            'review' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $review = Review::findOrFail($this->review_id);
        $review->update([
            'review' => $this->review,
            'rating' => $this->rating,
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
        ]);

        $this->reset(['review', 'rating', 'user_id', 'product_id', 'editing']);

        session()->flash('success', 'Review updated successfully.');
    }

    public function delete(Review $review)
    {
        $review->delete();

        session()->flash('success', 'Review deleted successfully.');
    }


    public function render()
    {
        return view('livewire.admin.reviews',[
            'reviews' => Review::all(),
            'products' => Product::all(),
            'users' => User::all(),
        ]);
    }
}

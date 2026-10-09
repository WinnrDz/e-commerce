<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Color;
use App\Models\Review;
use App\Models\Size;
use App\Models\Variant;
use Livewire\Attributes\Computed;

class Show extends Component
{
    public $product;
    public $color_id;
    public $size_id;

    public $cart;
    public $variant;
    public $quantity = 1;

    public $review;
    public $reviewRating = 1;
    public $isReviewing = false;

    public $reviewsOrder = 'desc';

    public function selectColor($id)
    {
        $this->color_id = $id;
    }


    public function selectSize($id)
    {
        $this->size_id = $id;
    }

    public function addQuantity() {
        $this->quantity += 1;
    }

    public function subQuantity() {
        $this->quantity -= 1;
        if ($this->quantity < 1) $this->quantity = 1;
    }


    public function addVariant()
    {
        $this->variant = Variant::where('color_id', $this->color_id)
                                ->where('size_id', $this->size_id)
                                ->where('product_id', $this->product->id)
                                ->first();

        $existingVariant = $this->cart->variants()
                                    ->where('id', $this->variant->id)
                                    ->first();

        if ($existingVariant) {
            $quantity = $existingVariant->pivot->quantity + $this->quantity;

            $this->cart->variants()->updateExistingPivot(
                $this->variant->id,
                ['quantity' => $quantity]
            );
        } else {
            $this->cart->variants()->attach(
                $this->variant->id,
                ['quantity' => $this->quantity]
            );
        }

        session()->flash('success', 'Variant added to cart successfully.');
    }

    public function cancelReview() {
        $this->review = null;
        $this->reviewRating = null;
        $this->isReviewing = false;
    }

    public function toggleReviewForm() {
        $this->isReviewing = !$this->isReviewing;
    }

    public function rate($rating) {
        $this->reviewRating = $rating;
    }

    public function submitReview() {
        $this->validate([
            'review' => 'required|string|max:1000',
            'reviewRating' => 'required|integer|min:1|max:5',
        ]);

        $this->product->reviews()->create([
            'user_id' => 1,
            'review' => $this->review,
            'rating' => $this->reviewRating,
        ]);

        $this->cancelReview();

        session()->flash('reviewSuccess', 'Review submitted successfully.');
    }

    public function toggleReviewsOrder() {
        if ($this->reviewsOrder == 'desc') {
            $this->reviewsOrder = 'asc';
        }
        elseif ($this->reviewsOrder == 'asc') {
            $this->reviewsOrder = 'desc';
        }
    }

    #[Computed]
    public function relatedProducts()
    {
        return Product::whereHas('tags', function($q) { 
            return $q->where('name','Featured');
        })->get(); 
    }

    public function show($id) 
    {
        return redirect()->route('show', $id);
    }

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->cart = \App\Models\Cart::FindOrFail(1);
    }

    public function render()
    {
        return view('livewire.show', [
            "colors" => Color::whereHas('variants', function ($q) {
                return $q->where('product_id', $this->product->id);
            })->get(),
            "sizes" => Size::whereHas('variants', function ($q) {
                return $q->where('product_id', $this->product->id);
            })->get(),
            "reviews" => Review::where('product_id',$this->product->id)->orderBy('created_at',$this->reviewsOrder)->get(),
        ]);
    }
}

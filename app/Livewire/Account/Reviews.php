<?php

namespace App\Livewire\Account;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts::account')]
class Reviews extends Component
{
    public function deleteReview($reviewId)
    {
        $review = \App\Models\Review::find($reviewId);
        if ($review) {
            $review->delete();
            session()->flash('message', 'Review deleted successfully.');
        } else {
            session()->flash('error', 'Review not found.');
        }
    }

    public function render()
    {
        return view('livewire.account.reviews',[
            'reviews' => \App\Models\Review::where('user_id', 1)->get()
        ]);
    }
}

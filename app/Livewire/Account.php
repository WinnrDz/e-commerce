<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts::account')]
class Account extends Component
{
    public function render()
    {
        return view('livewire.account');
    }
}

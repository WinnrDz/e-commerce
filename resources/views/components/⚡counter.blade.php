<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;

    public function increment() {
        $this->count++;
    }
};
?>

<div>
    <h1>{{ $count }}</h1>

    <button
        wire:click="increment"
        class="bg-blue-500 text-white px-4 py-2 rounded">
        Increment
    </button>
</div>
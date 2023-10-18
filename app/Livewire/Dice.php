<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Dice extends Component
{
    #[Reactive]
    public array $dice;

    public function render()
    {
        return view('livewire.dice');
    }
}

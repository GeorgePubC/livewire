<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class DiceList extends Component
{
    #[Reactive]
    public array $dices;

    public function render()
    {
        return view('livewire.dice-list');
    }
}

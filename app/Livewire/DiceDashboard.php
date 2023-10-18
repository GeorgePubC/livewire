<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class DiceDashboard extends Component
{
    public array $dices = [
        [
            'name' => 'Dice 1',
            'value' => 2
        ]
    ];
    public int $index = 1;
    public int $clickCount = 0;

    public function render()
    {
        return view('livewire.dice-dashboard');
    }

    public function rollDice()
    {
        $this->clickCount++;
        $this->dices = array_map(function ($dice) {
            return  [
                'name' => $dice['name'],
                'value' => rand(1, 6)
            ];
        }, $this->dices);

        foreach ($this->dices as $index => $dice) {
            if ($dice['value'] == 1) {
                $this->removeDiceByIndex($index);
            }

            if ($dice['value'] == 6) {
                $this->addDice();
            }
        }
    }

    public function addDice()
    {
        $this->index++;

        $newDice = [
            'name' => 'Dice ' . $this->index,
            'value' => rand(1,6)
        ];

        $this->dices[] = $newDice;

        if ($newDice['value'] == 1) {
            foreach($this->dices as $index => $dice) {
                if ($dice['name'] == $newDice['name']) {
                    $this->removeDiceByIndex($index);
                    break;
                }
            }
            return;
        }

        if ($newDice['value'] == 6) {
            $this->addDice();
        }
    }

    public function removeDiceByIndex($index) {
        unset($this->dices[$index]);
    }
}

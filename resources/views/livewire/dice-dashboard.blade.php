<div>
    @if(count($dices))
        <button wire:click="rollDice">Roll All Dice</button>
        <livewire:dice-list :dices="$dices" />
    @else
        <p>You managed to roll {{ $clickCount }} {{ Str::Plural('time', $clickCount) }} and created {{ $index }} {{ Str::Plural('dice', $index) }}... Prick</p>
    @endif
</div>

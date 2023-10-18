<div>
    @foreach ($dices as $dice)
        <livewire:dice :$dice :key="$dice['name']" />
    @endforeach
</div>

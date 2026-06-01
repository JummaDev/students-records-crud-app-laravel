<div>
    <input type="text" wire:model="item" placeholder="Your Task">
    <button wire:click="add">Add</button>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }} <span wire:click="remove({{ $loop->index }})">X</span></li>
        @endforeach
    </ul>

</div>

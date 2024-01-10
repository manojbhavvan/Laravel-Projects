<div>
    <form wire:submit.prvent="createPoll">
        <label>Poll Title</label>

        <input type="text" wire:model="title" />

        {{-- Current Title: {{ $title }} --}}

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div class="mb-4">
            @foreach ($options as $index => $option)
                <div>
                    <label>Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                </div>
                {{-- {{ $index }} - {{ $option }} --}}
            @endforeach
        </div>

        <button type="submit" class="btn">Create Poll</button>
    </form>
</div>

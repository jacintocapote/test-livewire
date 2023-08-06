<x-modal form-action="update">
    <x-slot name="title">
     Image: {{ $image->id }}
     <button wire:click="$emit('closeModal', true)">Close</button>
    </x-slot>

    <x-slot name="content">
        <form class="my-6" wire:submit.prevent="save">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" wire:model="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="name">Alt</label>
                <input type="text" class="form-control" id="alt" wire:model="alt" value="{{ $image->alt }}">
                @error('alt') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </form>  
    </x-slot>

    <x-slot name="buttons">
        <button wire:click="update">Save</button>
    </x-slot>
</x-modal>

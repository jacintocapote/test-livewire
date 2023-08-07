<x-modal form-action="update">
    <x-slot name="title">
        <div class="text-white">
            <button class="float-right" wire:click="$emit('closeModal', true)">X</button>
        </div>
    </x-slot>

    <x-slot name="content">
        <span class="text-left">Image: {{ $image->id }}</span>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="text-white max-h-40 min-w-text-form placeholder-white backdrop-blur-sm bg-white/20 rounded-lg" maxlength="256" size="34" required id="name" placeholder="" wire:model="name">
        </div>
        <div class="form-group">
            <label for="alt">Alt</label>
            <input type="text" class="text-white max-h-40 min-w-text-form placeholder-white backdrop-blur-sm bg-white/20 rounded-lg" maxlength="256" size="34" required id="alt" placeholder="" wire:model="alt">
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="text-center min-w-button-upload bg-purple text-white py-2 px-4 rounded-3xl" wire:click="update">SAVE</button>
    </x-slot>
</x-modal>

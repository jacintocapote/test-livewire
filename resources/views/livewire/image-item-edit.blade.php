<x-modal form-action="update">
    <x-slot name="title">
        <div class="text-white">
            <span class="float-right m-34" wire:click="$emit('closeModal', true)">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                    <path d="M2 2L17.5 17.5" stroke="white" stroke-width="3" stroke-linecap="round"/>
                    <path d="M17.5 2L2 17.5" stroke="white" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </span>
        </div>
    </x-slot>

    <x-slot name="content">
        <span class="text-left mb-2 text-xl">Image: {{ $image->id }}</span>
        <div class="form-group flex flex-nowrap mt-40 ml-13">
            <label class="pt-7 text-base min-w-label-form" for="name">Name</label>
            <input type="text" class="text-white max-h-40 min-w-text-form placeholder-white backdrop-blur-sm bg-white/20 rounded-lg" maxlength="256" size="34" required id="name" placeholder="" wire:model="name">
        </div>
        <div class="form-group flex flex-nowrap ml-13">
            <label class="pt-7 text-base min-w-label-form" for="alt">Alt</label>
            <input type="text" class="text-white max-h-40 min-w-text-form placeholder-white backdrop-blur-sm bg-white/20 rounded-lg" maxlength="256" size="34" required id="alt" placeholder="" wire:model="alt">
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="text-base mt-16 text-center min-w-button-upload bg-purple text-white py-2 px-4 rounded-3xl" wire:click="update">SAVE</button>
        @error('name')<span class="error text-error text-xs ml-16 text-center mt-28">{{ $message }}</span> @enderror
        @error('alt')<span class="error text-error text-xs ml-16 text-center mt-28">{{ $message }}</span> @enderror
    </x-slot>
</x-modal>

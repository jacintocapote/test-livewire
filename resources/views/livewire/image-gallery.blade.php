<div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">
    <div wire:key="{{ $instance->id }}" class="p-6 mx-auto max-w-7xl lg:p-8">
        <div class="flex justify-center">
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                <a href="/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Back</a>
            </div>
        </div>
        <h3>Image Gallery for {{ $instance->type() }}: {{ $instance->name() }}</h3>
        <div class="overflow-auto grid grid-cols-3 gap-4">
            @foreach ($instance->images as $item)
                <livewire:image-item :item="$item" />
            @endforeach
        </div>
        <div class="mt-16">
            <form class="my-6" wire:submit.prevent="save">
                <input type="file" wire:model="image">
             
                @error('image') <span class="error">{{ $message }}</span> @enderror
             
                <button type="submit">Save Photo</button>
            </form>  
        </div>
    </div>
</div>

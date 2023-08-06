<div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased" style="
background-image: url('{{'/storage/' . $item->filepath }}');
background-repeat: no-repat;
background-size: cover;
background-blend-mode: multiply;
">
    <div class="w-full h-[50vh] bg-cover bg-center">
        <div class="w-full h-50 flex  justify-center items-center backdrop-blur-md">
            <span class="text-black w-1/2 text-center flex flex-nowrap">
                <button wire:click="$emit('openModal', 'image-item-edit', {{ json_encode(['image' => $item->id]) }})" class="bg-stone-100 hover:bg-stone-300 text-stone-700 py-2 px-4 rounded-full">
                    Manage
                </button>
                <button wire:click="delete" class="bg-red-300 hover:bg-red-500 text-stone-700 py-2 px-4 rounded-full">
                    Delete
                </button>
            </span>
        </div>
    </div>
</div>
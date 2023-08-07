<div class="mb-40 min-w-image-card min-h-image-card max-w-image-card max-h-image-card bg-center bg-no-repeat bg-cover rounded-lg" style="
background-image: url('{{'/storage/' . $item->filepath }}');
">
    @if($item->favorite)
        <div class="w-10 h-10 bg-purple rounded-full my-4 mx-5 float-right">
            <img wire:click="favorite" src="/images/heart.svg" width="19px" height="18px" class="pt-3 mx-auto" />
        </div>
    @else
        <div class="w-10 h-10 bg-greyaction rounded-full my-4 mx-5 float-right">
            <img wire:click="favorite" src="/images/heart-unfill.svg" width="19px" height="18px" class="pt-3 mx-auto" />
        </div>
    @endif
    <div class="relative w-auto bg-cover bg-center rounded-b-sm pt-9">
        <div class="mt-actions min-h-image-actions justify-center items-center backdrop-blur-md flex flex-nowrap rounded-b-lg">
            <button wire:click="$emit('openModal', 'image-item-edit', {{ json_encode(['image' => $item->id]) }})" class="mx-2 min-h-image-button bg-stone-100 hover:bg-stone-300 text-stone-700 px-9 rounded-full">
                Manage
            </button>
            <button wire:click="delete" class=" min-h-image-button text-white bg-delete hover:bg-red-500 px-9 mx-2 rounded-full">
                Delete
            </button>
        </div>
    </div>
</div>
<div class="flex items-center justify-center bg-car bg-cover bg-repeat bg-center font-raleway selection:text-white backdrop-blur-sm bg-black/20" style="background-image: url('/images/background.png')">
    <div wire:key="gallery-{{ $instance->id }}" class="mx-auto">
        <div class="flow-root mb-header-bottom pt-header-top">
            <h3 class="float-left text-white text-xl">Image Gallery for {{ $instance->type() }}: {{ $instance->name() }}</h3>
            <a href="/" class="float-right text-white text-xs">
                <div class=" float-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="11" viewBox="0 0 8 11" fill="none" class="absolute m-2 ml-2.5">
                        <path d="M7 1L2 5.5L7 10" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                        <g filter="url(#filter0_bd_5_218)">
                        <circle cx="16.5" cy="12.5" r="12.5" fill="#3F54D1"/>
                        </g>
                        <defs>
                        <filter id="filter0_bd_5_218" x="-6" y="-10" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_5_218"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                        <feBlend mode="normal" in2="effect1_backgroundBlur_5_218" result="effect2_dropShadow_5_218"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_5_218" result="shape"/>
                        </filter>
                        </defs>
                        </svg>
                </div>
                <span class="float-right pt-1 min-w-back-list text-right">Back To {{ $instance->type() }} List</span>
            </a>
        </div>
        <div class="gallery-container backdrop-blur-sm bg-white/20 rounded-lg min-h-gallery-container min-w-gallery-container">
            <div class="pt-40">
                <div class="overflow-auto grid grid-cols-3 gap-0 ml-60 mr-40 max-h-gallery-container">
                    @foreach ($instance->images as $item)
                        <livewire:image-item :item="$item" wire:key="image- {{ $item->id }}" />
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-16">
            <form class="my-6 flex flex-nowrap">
                <input type="text" class="text-white max-h-40 min-w-text-form placeholder-white backdrop-blur-sm bg-white/20 rounded-lg" maxlength="256" size="34" required id="name" placeholder="Text" wire:model="name">
                <label class="min-w-button-upload flex flex-col items-center justify-center bg-transparent cursor-pointer ml-16"  for="file-upload">
                    <div class="flex flex-nowrap">
                        <span class="text-center min-w-button-upload bg-purple text-white py-2 px-4 rounded-3xl">UPLOAD</span>
                        @error('image') <span class="error text-error text-xs ml-16 text-center pt-3">{{ $message }}</span> @enderror
                    </div>
                </label>
                <input type="file" id="file-upload" wire:model="image" class="hidden" />           
            </form> 
        </div>
    </div>
</div>

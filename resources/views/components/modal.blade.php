@props(['formAction' => false])

<div class="font-raleway text-white backdrop-blur-sm bg-black/20 rounded-lg max-h-modal min-w-modal">
    @if($formAction)
        <form wire:submit.prevent="{{ $formAction }}">
    @endif
            <div class="pt-63 p-4 sm:px-6 sm:py-4">
                @if(isset($title))
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $title }}
                    </h3>
                @endif
            </div>
            <div class="mx-79 sm:p-6">
                <div class="space-y-6">
                    {{ $content }}
                </div>
            </div>

            <div class="mx-79 pb-63 sm:px-4 sm:flex">
                {{ $buttons }}
            </div>
    @if($formAction)
        </form>
    @endif
</div>
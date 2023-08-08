@props(['formAction' => false])

<div class="font-raleway modal-body text-white backdrop-blur-modal bg-white/20 rounded-lg w-modalw h-modalh">
    @if($formAction)
        <form class="mt-320" wire:submit.prevent="{{ $formAction }}">
    @endif
            <div class="pt-63 p-4 sm:px-6 sm:py-4">
                @if(isset($title))
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $title }}
                    </h3>
                @endif
            </div>
            <div class="mx-66 mt-63">
                <div class="space-y-6">
                    {{ $content }}
                </div>
            </div>

            <div class="mx-66 mt-16 pb-63 sm:px-4 sm:flex">
                {{ $buttons }}
            </div>
    @if($formAction)
        </form>
    @endif
</div>
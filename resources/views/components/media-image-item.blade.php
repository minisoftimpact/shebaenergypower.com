@props([
    'src',
    'alt' => 'Photo',
])

<div class="group relative aspect-video cursor-pointer overflow-hidden rounded-lg">
    <img alt="{{ $alt }}" class="aspect-video object-cover" src="{{ $src }}" />
    <div @click="$dispatch('overlay-clicked', '{{ $src }}')" class="absolute inset-0 z-30 hidden h-full w-full items-center justify-center bg-black/75 group-hover:flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-10 text-white">
            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Zm8.25-3.75a.75.75 0 0 1 .75.75v2.25h2.25a.75.75 0 0 1 0 1.5h-2.25v2.25a.75.75 0 0 1-1.5 0v-2.25H7.5a.75.75 0 0 1 0-1.5h2.25V7.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd"></path>
        </svg>
    </div>
</div>

<x-master-layout
    :title="$product->name ?? ''"
    :metaDescription="$product->description ?? 'Sheba Energy Power is an energy and power solutions company in Bangladesh.'"
    :metaKeywords="'Sheba Energy Power, Generators, ' . $product->brand . ', ' . $product->model"
    :metaImage="'/products/' . $product->id . '/photos/1.jpg'"
>
    <section>
        <div class="container py-4 md:py-6">
            <div x-data="{ selectedImage: '{{ $product->photos[0] }}', zoomed: false }" class="grid gap-4 md:grid-cols-2">
                <div class="space-y-2">
                    <!-- Main Image --> 
                    <div class="relative cursor-pointer overflow-hidden rounded border" @click="zoomed = true">
                        <div class="relative aspect-square transition-transform duration-300">
                            <img :src="selectedImage" alt="{{ $product->name }}" class="aspect-square object-cover" />
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" @click.stop="zoomed = true" class="absolute bottom-4 left-4 hidden size-12 rounded-full bg-black/50 p-2 text-white transition-all hover:bg-brand-primary hover:p-1.5 md:block">
                            <title>Zoom</title>
                            <path fill-rule="evenodd" d="M15 3.75a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0V5.56l-3.97 3.97a.75.75 0 1 1-1.06-1.06l3.97-3.97h-2.69a.75.75 0 0 1-.75-.75Zm-12 0A.75.75 0 0 1 3.75 3h4.5a.75.75 0 0 1 0 1.5H5.56l3.97 3.97a.75.75 0 1 1-1.06 1.06L4.5 5.56v2.69a.75.75 0 0 1-1.5 0v-4.5Zm11.47 11.78a.75.75 0 1 1 1.06-1.06l3.97 3.97v-2.69a.75.75 0 0 1 1.5 0v4.5a.75.75 0 0 1-.75.75h-4.5a.75.75 0 0 1 0-1.5h2.69l-3.97-3.97Zm-4.94-1.06a.75.75 0 0 1 0 1.06L5.56 19.5h2.69a.75.75 0 0 1 0 1.5h-4.5a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 1 1.5 0v2.69l3.97-3.97a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
                        </svg>
                    </div>

                    <!-- Thumbnail Images -->
                    <div class="grid grid-cols-4 gap-2">
                        @foreach($product->photos as $index => $photo)
                        <div @click="selectedImage = '{{ $photo }}'; zoomed = false" :class="selectedImage === '{{ $photo }}' ? 'border-brand-primary' : 'opacity-50'" class="w-full cursor-pointer overflow-hidden rounded border">
                            <div class="relative aspect-square">
                                <img alt="{{ $product->name }}" class="aspect-square object-cover" src="{{ $photo }}" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Modal -->
                <template x-if="zoomed">
                    <div 
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 p-4" 
                        @click.self="zoomed = false"
                    >
                        <div class="relative max-w-4xl">
                            <!-- Modal Close Button -->
                            <button 
                                @click="zoomed = false"
                                class="flex justify-center items-center absolute top-2 right-2 text-white bg-black px-2.5 pb-1 pt-0.5 rounded-full hover:bg-brand-primary"
                            >
                                &times;
                            </button>
                            
                            <!-- Zoomed Image inside Modal -->
                            <div class="aspect-square">
                                <img :src="selectedImage" alt="{{ $product->name }}" class="object-cover w-full h-full" />
                            </div>
                        </div>
                    </div>
                </template>

                <div class="flex flex-col justify-start gap-4 md:gap-6">
                    <h1 class="text-center text-xl font-semibold text-brand-primary md:text-left md:text-3xl">
                        {{ $product->name }}
                    </h1>
                    <p>Brand: <b>{{ $product->brand }}</b></p>
                    <p class="font-bold text-brand-secondary">
                        {{ $product->price ?? 'Call for Pricing' }}
                    </p>
                    <div class="flex items-center justify-start gap-4">
                        <a 
                            href="tel:+8801714244191"
                            class="flex w-56 items-center gap-2 rounded border border-brand-primary px-3 py-1 text-brand-primary "
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-8 rounded-full border border-white p-1">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-bold">+88 01714 244 191</span>
                        </a>
                        <a 
                            href="https://api.whatsapp.com/send?phone=8801714244191&amp;text=" 
                            class="social-icon" 
                            target="_blank" 
                            aria-label="whatsapp" 
                            style="display: inline-block; width: 40px; height: 40px; position: relative; overflow: hidden; vertical-align: middle;"
                        >
                            <span class="social-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                                <svg role="img" aria-label="whatsapp social icon" class="social-svg" viewBox="0 0 64 64" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 50%; fill-rule: evenodd;">
                                    <g class="social-svg-icon" style="transition: fill 170ms ease-in-out; fill: white;">
                                        <path d="M0,0H64V64H0ZM0 0v64h64V0zm48 31.59c0 8.605-7.031 15.586-15.71 15.586-2.755 0-5.34-.703-7.595-1.942L16 48l2.836-8.363a15.43 15.43 0 0 1-2.254-8.047c0-8.61 7.031-15.59 15.707-15.59C40.97 16 48 22.98 48 31.59M32.29 18.484c-7.282 0-13.208 5.88-13.208 13.106 0 2.867.938 5.52 2.516 7.68l-1.649 4.867 5.074-1.61a13.2 13.2 0 0 0 7.27 2.164c7.281 0 13.207-5.875 13.207-13.101s-5.926-13.106-13.21-13.106m7.933 16.696c-.098-.16-.352-.258-.739-.45-.382-.187-2.277-1.113-2.629-1.242-.355-.125-.613-.191-.867.192-.258.383-.996 1.242-1.218 1.5-.227.254-.45.285-.836.093-.387-.191-1.625-.593-3.098-1.894-1.145-1.012-1.918-2.262-2.14-2.645-.223-.382-.024-.59.167-.78.176-.173.387-.446.578-.669.196-.223.258-.383.387-.637.129-.257.063-.48-.035-.671-.094-.192-.867-2.07-1.188-2.836s-.64-.637-.863-.637c-.226 0-.484-.031-.738-.031a1.4 1.4 0 0 0-1.027.476c-.356.383-1.348 1.309-1.348 3.188s1.379 3.695 1.57 3.949c.196.258 2.664 4.238 6.578 5.77 3.914 1.53 3.914 1.019 4.621.956.707-.066 2.278-.925 2.602-1.816.32-.894.32-1.66.223-1.816m0 0"></path>
                                    </g>
                                    <g class="social-svg-mask" style="transition: fill 170ms ease-in-out; fill: rgb(37, 211, 102);">
                                        <path d="M0 0v64h64V0zm48 31.59c0 8.605-7.031 15.586-15.71 15.586-2.755 0-5.34-.703-7.595-1.942L16 48l2.836-8.363a15.43 15.43 0 0 1-2.254-8.047c0-8.61 7.031-15.59 15.707-15.59C40.97 16 48 22.98 48 31.59M32.29 18.484c-7.282 0-13.208 5.88-13.208 13.106 0 2.867.938 5.52 2.516 7.68l-1.649 4.867 5.074-1.61a13.2 13.2 0 0 0 7.27 2.164c7.281 0 13.207-5.875 13.207-13.101s-5.926-13.106-13.21-13.106m7.933 16.696c-.098-.16-.352-.258-.739-.45-.382-.187-2.277-1.113-2.629-1.242-.355-.125-.613-.191-.867.192-.258.383-.996 1.242-1.218 1.5-.227.254-.45.285-.836.093-.387-.191-1.625-.593-3.098-1.894-1.145-1.012-1.918-2.262-2.14-2.645-.223-.382-.024-.59.167-.78.176-.173.387-.446.578-.669.196-.223.258-.383.387-.637.129-.257.063-.48-.035-.671-.094-.192-.867-2.07-1.188-2.836s-.64-.637-.863-.637c-.226 0-.484-.031-.738-.031a1.4 1.4 0 0 0-1.027.476c-.356.383-1.348 1.309-1.348 3.188s1.379 3.695 1.57 3.949c.196.258 2.664 4.238 6.578 5.77 3.914 1.53 3.914 1.019 4.621.956.707-.066 2.278-.925 2.602-1.816.32-.894.32-1.66.223-1.816m0 0"></path>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="flex items-center justify-start gap-4">
                        <a 
                            href="tel:+8801743368889" 
                            class="flex w-56 items-center gap-2 rounded border border-brand-primary px-3 py-1 text-brand-primary "
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-8 rounded-full border border-white p-1">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-bold">+88 01743 368 889</span>
                        </a>
                        <a
                            href="https://api.whatsapp.com/send?phone=8801743368889&amp;text=" 
                            class="social-icon" 
                            target="_blank" 
                            aria-label="whatsapp" 
                            style="display: inline-block; width: 40px; height: 40px; position: relative; overflow: hidden; vertical-align: middle;"
                        >
                            <span class="social-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                                <svg role="img" aria-label="whatsapp social icon" class="social-svg" viewBox="0 0 64 64" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 50%; fill-rule: evenodd;">
                                    <g class="social-svg-icon" style="transition: fill 170ms ease-in-out; fill: white;">
                                        <path d="M0,0H64V64H0ZM0 0v64h64V0zm48 31.59c0 8.605-7.031 15.586-15.71 15.586-2.755 0-5.34-.703-7.595-1.942L16 48l2.836-8.363a15.43 15.43 0 0 1-2.254-8.047c0-8.61 7.031-15.59 15.707-15.59C40.97 16 48 22.98 48 31.59M32.29 18.484c-7.282 0-13.208 5.88-13.208 13.106 0 2.867.938 5.52 2.516 7.68l-1.649 4.867 5.074-1.61a13.2 13.2 0 0 0 7.27 2.164c7.281 0 13.207-5.875 13.207-13.101s-5.926-13.106-13.21-13.106m7.933 16.696c-.098-.16-.352-.258-.739-.45-.382-.187-2.277-1.113-2.629-1.242-.355-.125-.613-.191-.867.192-.258.383-.996 1.242-1.218 1.5-.227.254-.45.285-.836.093-.387-.191-1.625-.593-3.098-1.894-1.145-1.012-1.918-2.262-2.14-2.645-.223-.382-.024-.59.167-.78.176-.173.387-.446.578-.669.196-.223.258-.383.387-.637.129-.257.063-.48-.035-.671-.094-.192-.867-2.07-1.188-2.836s-.64-.637-.863-.637c-.226 0-.484-.031-.738-.031a1.4 1.4 0 0 0-1.027.476c-.356.383-1.348 1.309-1.348 3.188s1.379 3.695 1.57 3.949c.196.258 2.664 4.238 6.578 5.77 3.914 1.53 3.914 1.019 4.621.956.707-.066 2.278-.925 2.602-1.816.32-.894.32-1.66.223-1.816m0 0"></path>
                                    </g>
                                    <g class="social-svg-mask" style="transition: fill 170ms ease-in-out; fill: rgb(37, 211, 102);">
                                        <path d="M0 0v64h64V0zm48 31.59c0 8.605-7.031 15.586-15.71 15.586-2.755 0-5.34-.703-7.595-1.942L16 48l2.836-8.363a15.43 15.43 0 0 1-2.254-8.047c0-8.61 7.031-15.59 15.707-15.59C40.97 16 48 22.98 48 31.59M32.29 18.484c-7.282 0-13.208 5.88-13.208 13.106 0 2.867.938 5.52 2.516 7.68l-1.649 4.867 5.074-1.61a13.2 13.2 0 0 0 7.27 2.164c7.281 0 13.207-5.875 13.207-13.101s-5.926-13.106-13.21-13.106m7.933 16.696c-.098-.16-.352-.258-.739-.45-.382-.187-2.277-1.113-2.629-1.242-.355-.125-.613-.191-.867.192-.258.383-.996 1.242-1.218 1.5-.227.254-.45.285-.836.093-.387-.191-1.625-.593-3.098-1.894-1.145-1.012-1.918-2.262-2.14-2.645-.223-.382-.024-.59.167-.78.176-.173.387-.446.578-.669.196-.223.258-.383.387-.637.129-.257.063-.48-.035-.671-.094-.192-.867-2.07-1.188-2.836s-.64-.637-.863-.637c-.226 0-.484-.031-.738-.031a1.4 1.4 0 0 0-1.027.476c-.356.383-1.348 1.309-1.348 3.188s1.379 3.695 1.57 3.949c.196.258 2.664 4.238 6.578 5.77 3.914 1.53 3.914 1.019 4.621.956.707-.066 2.278-.925 2.602-1.816.32-.894.32-1.66.223-1.816m0 0"></path>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            
            <br>
            <br>

            <div x-data="{ active: 'Specification' }" class="space-y-6">
                <!-- Tab Headers -->
                <div class="relative flex items-center justify-start text-center font-semibold">
                    <!-- Specification Tab -->
                    <div 
                        @click="active = 'Specification'"
                        :class="active === 'Specification' ? 'z-10 border-brand-primary border-b-white bg-white' : 'border-transparent'"
                        class="w-32 cursor-pointer rounded-t-xl border-2 py-2">
                        Specification
                    </div>

                    <!-- Description Tab (shown only if there's a description) -->
                    @if($product->description)
                    <div 
                        @click="active = 'Description'"
                        :class="active === 'Description' ? 'z-10 border-brand-primary border-b-white bg-white' : 'border-transparent'"
                        class="w-32 cursor-pointer rounded-t-xl border-2 py-2">
                        Description
                    </div>
                    @endif

                    <!-- Border below the tabs -->
                    <div class="absolute bottom-0 left-0 right-0 w-full border-b-2 border-brand-primary"></div>
                </div>

                <!-- Tab Content -->
                <!-- Specification Tab Content -->
                <template x-if="active === 'Specification'">
                    <div class="w-full overflow-auto border border-brand-primary bg-white">
                        <table class="w-full min-w-max table-auto text-sm md:text-base">
                            <tbody>
                                @foreach($product->specifications as $specification => $properties)
                                <tr class="bg-brand-primary text-white">
                                    <th colspan="2" class="p-2">{{ $specification }}</th>
                                </tr>
                                @foreach($properties as $key => $value)
                                <tr class="border-t border-brand-primary">
                                    <td class="p-2">{{ $key }}</td>
                                    <td class="p-2">{{ $value }}</td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </template>

                <!-- Description Tab Content -->
                @if($product->description)
                <template x-if="active === 'Description'">
                    <div class="text-justify leading-loose">{!! $product->description !!}</div>
                </template>
                @endif
            </div>
        </div>
    </section>
</x-master-layout>

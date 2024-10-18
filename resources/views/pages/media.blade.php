<x-master-layout>
    <section x-data="{ isShow: false, currentImage: '' }" @overlay-clicked.window="isShow = true; currentImage = $event.detail;">
        <div class="container py-4 md:py-6">
            <h2 class="text-lx mb-4 text-center font-semibold uppercase text-brand-primary md:mb-6 md:text-2xl">Photo Gallery</h2>
            <div class="grid grid-cols-2 gap-2 md:grid-cols-3 md:gap-4">
                <x-media-image-item :src="asset('images/media/Agg-Power-Generator.jpg')" />
                <x-media-image-item :src="asset('images/media/Cummings-generator.jpg')" />
                <x-media-image-item :src="asset('images/media/Perkins-generator.jpg')" />
                <x-media-image-item :src="asset('images/media/Generator.jpg')" />
                <x-media-image-item :src="asset('images/media/Hyundai-portable-generator.jpg')" />
                <x-media-image-item :src="asset('images/media/Generator-maintanance.jpg')" />
                <x-media-image-item :src="asset('images/media/1.jpg')" />
                <x-media-image-item :src="asset('images/media/30.jpg')" />
                <x-media-image-item :src="asset('images/media/11.jpg')" />
            </div>
        </div>

        <!-- Modal -->
        <template x-if="isShow">
            <div class="fixed inset-0 z-50 flex h-screen w-screen items-center justify-center bg-black/80 p-4"
                @click.self="isShow = false"
            >
                <div class="relative max-h-[90vh] w-full max-w-4xl overflow-y-auto">
                    <div class="aspect-video">
                        <img :alt="'Photo'" class="aspect-video object-cover" :src="currentImage" />
                    </div>
                </div>
            </div>
        </template>
    </section>
</x-master-layout>

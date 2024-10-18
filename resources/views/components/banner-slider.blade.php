<div x-data="slider({ auto: true, delay: 3000, childrenLength: 5 })" class="relative h-full w-full overflow-hidden">
    <!-- Slider content -->
    <div class="h-full w-full overflow-hidden" x-ref="sliderContent">
        <template x-for="(image, index) in items" :key="index">
            <div x-show="currentIndex === index" class="w-full h-full" :class="{'hidden': currentIndex !== index}">
                <img :src="image.src" :alt="image.alt" class="object-cover w-full h-full" />
            </div>
        </template>
    </div>

    <!-- Previous button -->
    <div @click="handlePrevious" class="absolute left-2 top-1/2 z-20 flex size-6 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-gray-500 hover:bg-brand-primary">
        <span class="-mt-0.5 text-white">&larr;</span>
    </div>

    <!-- Next button -->
    <div @click="handleNext" class="absolute right-2 top-1/2 z-20 flex size-6 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-gray-500 hover:bg-brand-primary">
        <span class="-mt-0.5 text-white">&rarr;</span>
    </div>

    <!-- Dots -->
    <div class="absolute bottom-0 left-0 right-0 z-20 flex w-full items-center justify-center gap-2 p-2">
        <template x-for="(item, index) in items" :key="index">
            <div @click="currentIndex = index" class="size-3 cursor-pointer rounded-full" :class="{'bg-brand-primary': currentIndex === index, 'bg-gray-500': currentIndex !== index}"></div>
        </template>
    </div>
</div>

<script>
function slider({ auto, delay, childrenLength }) {
    return {
        currentIndex: 0,
        items: [
            { src: '/images/banner/sheba-energy-banner-1.jpg', alt: 'sheba-energy-banner-1' },
            { src: '/images/banner/sheba-energy-banner-2.jpg', alt: 'sheba-energy-banner-2' },
            { src: '/images/banner/sheba-energy-banner-3.jpg', alt: 'sheba-energy-banner-3' },
            { src: '/images/banner/sheba-energy-banner-4.jpg', alt: 'sheba-energy-banner-4' },
            { src: '/images/banner/sheba-energy-banner-5.jpg', alt: 'sheba-energy-banner-5' },
        ],
        handlePrevious() {
            this.currentIndex = (this.currentIndex - 1 + childrenLength) % childrenLength;
        },
        handleNext() {
            this.currentIndex = (this.currentIndex + 1) % childrenLength;
        },
        startAutoSlide() {
            if (auto) {
                setInterval(() => {
                    this.handleNext();
                }, delay);
            }
        },
        init() {
            this.startAutoSlide();
        }
    };
}
</script>

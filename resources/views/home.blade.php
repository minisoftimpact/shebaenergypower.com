<x-master-layout>
    <div class="container pt-4 md:pt-8">
        <div class="relative aspect-[3/1] overflow-hidden rounded-lg">
            <x-banner-slider></x-banner-slider>
        </div>
    </div>
    <section>
        <div class="container py-4 md:py-6">
            <div class="space-y-4 text-justify">
                <p>
                    <b>Sheba Energy Power</b> is an energy and power solutions company in Bangladesh. Sheba Energy Power is a bunch of well-experienced technical people who work together for the company. We specialize in offering high-quality generators from top brands such as Ricardo, Deutz, Hyundai, Honda, Perkins, and Cummings. Our generators are reliable, efficient, and durable, ensuring an uninterrupted power supply for our clients’ critical operations. With a team of experienced professionals and a commitment to excellence, Sheba Energy Power has established itself as a trusted partner for all energy and power-related needs. Our services include generator sales, installation, and maintenance, and we have the ability to make Base fuelting, Soundproof, Auto, Four Protection, (water temperature, oil temperature, oil pressure, over speed), and Auto Transfer Switch (ATS).
                </p>
                <p>
                    We believe that our success is built on strong relationships with our clients, and we are committed to fostering long-term partnerships based on trust, transparency, and mutual respect. And we are dedicated to providing our clients with the best-in-class products and services.
                </p>
            </div>
        </div>
    </section>
    
    <x-product-section></x-product-section>

    <section class="bg-gray-50">
        <div class="container py-4 md:py-6">
            <div class="grid gap-4 md:grid-cols-2">
                <div class="w-full rounded border bg-white shadow md:p-4">
                    <div class="relative aspect-video w-full">
                        <img 
                            alt="Photo" 
                            class="aspect-video object-contain"
                            src="{{ asset('images/why-buy-a-generator-from-us.jpg') }}"
                        />
                    </div>
                </div>
                <div>
                    <h3 class="text-center text-lg md:text-xl font-bold md:text-left">WHY BUY A GENERATOR FROM US?</h3>
                    <p class="py-2 text-justify">
                        We have a skilled engineering team with over 20 years of experience who will assist you in purchasing generators of the right capacity by calculating your load and ensuring nationwide after-sales service.
                    </p>
                    <ul class="text-sm font-semibold md:text-base">
                        <li>🔹Service in quick time.</li>
                        <li>🔹After-sales service with 2 years warranty</li>
                        <li>🔹Free installation service</li>
                        <li>🔹Home service in the whole of Bangladesh.</li>
                        <li>🔹24/7 customer service after sales.</li>
                        <li>🔹Highest quality assurance at a fair price.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-master-layout>

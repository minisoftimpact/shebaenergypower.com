@props([
    'products' => null,
])

@if($products && $products->count())
<section>
    <div class="container py-4 md:py-6">
        <div class="grid shrink grow gap-3 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
            @foreach($products as $product)
            <x-product-card :product="$product" />
            @endforeach
        </div>
    </div>
</section>
@endif
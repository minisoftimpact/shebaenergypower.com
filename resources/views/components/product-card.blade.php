@props([
    'product' => null,
])

@if($product)
<a 
    class="cursor-pointer border bg-white shadow"
    href="/products/{{ $product->slug }}"
>
    <div class="relative aspect-square w-full">
        <img 
            alt="{{ $product->name }}" 
           class="aspect-square object-cover border-b" src="{{ $product->photos[0] }}"
        />
    </div>
    <div class="space-y-2 p-2">
        <h3 class="text-center text-sm font-semibold">{{ $product->name }}</h3>
    </div>
</a>
@endif

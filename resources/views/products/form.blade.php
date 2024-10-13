<div class="grid gap-4 lg:grid-cols-12">
    <!-- Name -->
    <div class="col-span-full">
        <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
        <input value="{{ old('name') ?? $product->name }}" type="text" id="name" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
        @error('name')
            <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Slug -->
    <div class="col-span-full">
        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
        <input value="{{ old('slug') ?? $product->slug }}" type="text" id="slug" name="slug" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
        @error('slug')
            <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Price -->
    <div class="col-span-6">
        <label for="price" class="block text-sm font-medium text-gray-700">Price (optional)</label>
        <input value="{{ old('price') ?? $product->price }}" type="number" id="price" name="price" class="mt-1 p-2 w-full border border-gray-300 rounded-md">
        @error('price')
            <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Brand -->
    <div class="col-span-6">
        <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
        <input value="{{ old('brand') ?? $product->brand }}" type="text" list="brand-options" id="brand" name="brand" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
        <datalist id="brand-options">
            @foreach($brands as $brand)
            <option value="{{ $brand }}"></option>
            @endforeach
        </datalist>
        @error('brand')
            <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Model Number -->
    <div class="col-span-6">
        <label for="model" class="block text-sm font-medium text-gray-700">Model Number</label>
        <input value="{{ old('model') ?? $product->model }}" type="text" id="model" name="model" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
        @error('model')
            <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Country of Origin -->
    <div class="col-span-6">
        <label for="country" class="block text-sm font-medium text-gray-700">Country of Origin</label>
        <input value="{{ old('country') ?? $product->country }}" type="text" list="country-options" id="country" name="country" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
        <datalist id="country-options">
            @foreach($countries as $country)
            <option value="{{ $country }}"></option>
            @endforeach
        </datalist>
        @error('country')
            <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
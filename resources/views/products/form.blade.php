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

    <!-- Description -->
    <div class="col-span-full">
        <label for="country" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea 
            name="description"
            class="w-full min-h-40 rounded-lg"
        >{{ $product->description }}</textarea>
        @error('description')
            <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
    </div>

    <hr class="col-span-full" />

    <!-- Product Photos -->
    <div class="col-span-full grid grid-cols-4 gap-4">
        <label for="imgInput1" class="border rounded w-full aspect-video cursor-pointer">
            <img id="preview1" src="{{ $product->photos[0] ?? '' }}" alt="Photo 1" class="w-full aspect-video object-cover" />
            <input name="photos[]" id="imgInput1" onchange="previewImage(event, 'preview1')" class="hidden" type="file" accept="image/*" />
        </label>
        <label for="imgInput2" class="border rounded w-full aspect-video cursor-pointer">
            <img id="preview2" src="{{ $product->photos[1] ?? '' }}" alt="Photo 2" class="w-full aspect-video object-cover" />
            <input name="photos[]" id="imgInput2" onchange="previewImage(event, 'preview2')" class="hidden" type="file" accept="image/*" />
        </label>
        <label for="imgInput3" class="border rounded w-full aspect-video cursor-pointer">
            <img id="preview3" src="{{ $product->photos[2] ?? '' }}" alt="Photo 3" class="w-full aspect-video object-cover" />
            <input name="photos[]" id="imgInput3" onchange="previewImage(event, 'preview3')" class="hidden" type="file" accept="image/*" />
        </label>
        <label for="imgInput4" class="border rounded w-full aspect-video cursor-pointer">
            <img id="preview4" src="{{ $product->photos[3] ?? '' }}" alt="Photo 4" class="w-full aspect-video object-cover" />
            <input name="photos[]" id="imgInput4" onchange="previewImage(event, 'preview4')" class="hidden" type="file" accept="image/*" />
        </label>
    </div>

    <script>
        function previewImage(event, imgId) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById(imgId);
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</div>
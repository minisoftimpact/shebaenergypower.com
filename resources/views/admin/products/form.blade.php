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
        <label for="imgInput1" class="border rounded w-full aspect-square cursor-pointer">
            <img id="preview1" src="{{ $product->photos[0] ?? '' }}" alt="Photo 1" class="w-full aspect-square object-contain" />
            <input name="photos[]" id="imgInput1" onchange="previewImage(event, 'preview1')" class="hidden" type="file" accept="image/*" />
            {{-- <button type="button" onclick="removeImage(0)">Remove</button> --}}
        </label>
        <label for="imgInput2" class="border rounded w-full aspect-square cursor-pointer">
            <img id="preview2" src="{{ $product->photos[1] ?? '' }}" alt="Photo 2" class="w-full aspect-square object-contain" />
            <input name="photos[]" id="imgInput2" onchange="previewImage(event, 'preview2')" class="hidden" type="file" accept="image/*" />
            {{-- <button type="button" onclick="removeImage(1)">Remove</button> --}}
        </label>
        <label for="imgInput3" class="border rounded w-full aspect-square cursor-pointer">
            <img id="preview3" src="{{ $product->photos[2] ?? '' }}" alt="Photo 3" class="w-full aspect-square object-contain" />
            <input name="photos[]" id="imgInput3" onchange="previewImage(event, 'preview3')" class="hidden" type="file" accept="image/*" />
            {{-- <button type="button" onclick="removeImage(2)">Remove</button> --}}
        </label>
        <label for="imgInput4" class="border rounded w-full aspect-square cursor-pointer">
            <img id="preview4" src="{{ $product->photos[3] ?? '' }}" alt="Photo 4" class="w-full aspect-square object-contain" />
            <input name="photos[]" id="imgInput4" onchange="previewImage(event, 'preview4')" class="hidden" type="file" accept="image/*" />
            {{-- <button type="button" onclick="removeImage(3)">Remove</button> --}}
        </label>
    </div>
    @error('photos')
        <div class="text-red-500 mt-1">{{ $message }}</div>
    @enderror

    <!-- Specifications -->
    <div class="col-span-full"
        x-data='{
            data: @json($product->specifications) ?? {
                Generator: {
                    "Brand Name": "",
                    "Model No": "",
                    "Country of Origin": "",
                    "Shipment & assembled": "",
                    "Capacity": "",
                    "Voltage": "",
                    "Phase": "",
                    "Frequency": "",
                    "Power Factor": "",
                    "Plant of Manufacturing": "",
                    "Fuel tank Capacity (L)": "",
                    "Per hour fuel Consumption": "",
                    "Open Set Dimensions": "",
                    "Weight": ""
                },
                Engine: {
                    "Manufacturer": "",
                    "Country of Origin": "",
                    "Cooling System": "",
                    "Rated RPM": "",
                    "Cylinder Arrangement": "",
                    "Governor type": "",
                    "Model": ""
                },
                Alternator: {
                    "Manufacturer": "",
                    "Country of Origin": "",
                    "Model": "",
                    "Voltage regulation (%)": ""
                }
            },

            newSectionName: "",

            newInput: {},

            init() {
                Object.keys(this.data).forEach(section => {
                    this.newInput[section] = { key: "", value: "" };
                });
            },
            
            addSection() {
                if (this.newSectionName) {
                    if (!this.data.hasOwnProperty(this.newSectionName)) {
                        this.data[this.newSectionName] = {};
                        this.newSectionName = "";
                        this.newInput[this.newSectionName] = {key:"", value:""};
                    } else {
                        alert("Section name must be unique!");
                    }
                }
            },
            
            removeSection(sectionName) {
                delete this.data[sectionName];
                delete this.newInput[sectionName];
            },
            
            addInput(sectionName) {
                if (this.newInput[sectionName]?.key && this.newInput[sectionName]?.value) {
                    this.data[sectionName][this.newInput[sectionName].key] = this.newInput[sectionName].value;
                    this.newInput[sectionName].key = "";
                    this.newInput[sectionName].value = "";
                }
            },
            
            removeInput(sectionName, key) {
                delete this.data[sectionName][key];
            }
        }'
    >
        <label for="country" class="block text-xl text-center font-medium text-gray-700 py-2">Specifications</label>
        
        <!-- Add hidden input field to submit specifications -->
        <input type="hidden" name="specifications" x-model="JSON.stringify(data)">

        <template x-for="(sectionData, sectionName) in data" :key="sectionName">
            <div class="border-b-2 mb-4">
                <div class="flex justify-between items-center bg-brand-primary text-white p-2">
                    <h3 x-text="sectionName"></h3>
                    {{-- <button type="button" @click="removeSection(sectionName)" class="bg-red-600 text-white px-2 py-1 rounded">Remove</button> --}}
                </div>
                
                <table class="w-full min-w-max table-auto text-sm md:text-base">
                    <tbody>
                        <template x-for="(value, key) in sectionData" :key="key">
                            <tr class="border-t border-brand-primary">
                                <td class="p-2" x-text="key"></td>
                                <td class="p-2">
                                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md" x-model="data[sectionName][key]">
                                </td>
                                <td class="p-2 text-right">
                                    <button type="button" @click="removeInput(sectionName, key)" class="bg-red-600 text-white px-2 py-1 rounded">Remove</button>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
                
                <!-- Add new input to a section -->
                <div class="flex my-4">
                    <input type="text" x-model="newInput[sectionName]['key']" placeholder="Key" class="w-full p-2 border border-gray-300 rounded-md mr-2">
                    <input type="text" x-model="newInput[sectionName]['value']" placeholder="Value" class="w-full p-2 border border-gray-300 rounded-md mr-2">
                    <button type="button" @click="addInput(sectionName)" class="bg-green-600 text-white px-2 py-1 rounded min-w-max">Add</button>
                </div>
            </div>
        </template>

        <!-- Add new section -->
        {{-- <div class="flex my-4">
            <input type="text" x-model="newSectionName" placeholder="New Section Name" class="w-full p-2 border border-gray-300 rounded-md mr-2">
            <button type="button" @click="addSection()" class="bg-green-600 text-white px-2 py-1 rounded min-w-max">Add Section</button>
        </div> --}}
    </div>
    @error('specifications')
        <div class="text-red-500 mt-1">{{ $message }}</div>
    @enderror

</div>

<script>
    function previewImage(event, imgId) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById(imgId);
            output.src = reader.result;
            output.classList.add('border-2', 'border-brand-primary/30');
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    function removeImage(index) {
        console.log(index)

        const preview = document.getElementById('preview' + (index + 1));
        const imgInput = document.getElementById('imgInput' + (index + 1));

        // Reset the image preview
        preview.src = '';
        preview.classList.remove('border-2', 'border-brand-primary/30');

        // Clear the file input value
        imgInput.value = '-';
    }
</script>
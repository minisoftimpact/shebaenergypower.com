<x-master-layout>
    <section x-data="productPage" x-init="loadStateFromUrl()">
        <div class="container min-h-[70vh] py-4 md:py-6">
            <!-- Header Section -->
            <div class="mb-4 flex flex-col justify-between gap-4 md:flex-row">
                <!-- Search Input -->
                <div class="flex w-full shrink-0 grow-0 items-center gap-2 md:w-52">
                    <div @click="isShowFilter = true" class="flex cursor-pointer items-center justify-center gap-1 rounded border bg-gray-200 p-2 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-5">
                            <path d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"></path>
                        </svg>
                        <div class="text-sm">Filter</div>
                    </div>
                    <!-- Search Input Field -->
                    <input type="search" placeholder="Search Product" class="w-full rounded py-1.5 md:py-2" x-on:input.debounce.500="applySearch" x-model="search" />
                </div>

                <!-- Header Title -->
                <div class="flex shrink grow items-center border bg-gray-300 px-4 md:justify-end md:px-8">
                    <h1 class="py-2 font-bold uppercase">Shop Page</h1>
                </div>

                <div class="md:hidden">
                    <template x-if="isShowFilter">
                        <div @click.self="isShowFilter = false" class="fixed inset-0 z-50 flex h-screen w-screen justify-start bg-black/40">
                            <div class="h-screen w-full max-w-xs bg-white shadow-lg overflow-y-auto">
                                <div class="flex items-center justify-between px-4 py-2">
                                    <a href="/">
                                        <img alt="Logo" width="120" height="45" src="{{ asset('images/logo.png') }}" />
                                    </a>
                                    <svg @click="isShowFilter = false" class="size-8" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
                                    </svg>
                                </div>
                                <hr>
                                <!-- Sidebar Filters (Brands, Country, Price) -->
                                <div class="w-full shrink-0 grow-0 space-y-4 md:w-52">
                                    <!-- Brand Filter -->
                                    <div class="border text-sm">
                                        <div class="border-b bg-gray-200 px-4 py-3">Brand</div>
                                        <div class="space-y-3 bg-white px-4 py-3">
                                            @foreach($brands as $brand)
                                            <label class="flex cursor-pointer items-center gap-2">
                                                <input type="checkbox" value="{{ $brand }}" x-model="brand" />
                                                <span>{{ $brand }}</span>
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Country of Origin Filter -->
                                    <div class="border text-sm">
                                        <div class="border-b bg-gray-200 px-4 py-3">Country Of Origin</div>
                                        <div class="space-y-3 bg-white px-4 py-3">
                                            @foreach($countries as $country)
                                            <label class="flex cursor-pointer items-center gap-2">
                                                <input type="checkbox" value="{{ $country }}" x-model="country" />
                                                <span>{{ $country }}</span>
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Price Filter -->
                                    <div class="border text-sm">
                                        <div class="border-b bg-gray-200 px-4 py-3">Price</div>
                                        <div class="space-y-3 bg-white px-4 py-3">
                                            <label class="flex cursor-pointer items-center gap-2">
                                                <input type="radio" name="price" value="high-to-low" x-model="price" />
                                                <span>High To Low</span>
                                            </label>
                                            <label class="flex cursor-pointer items-center gap-2">
                                                <input type="radio" name="price" value="low-to-high" x-model="price" />
                                                <span>Low To High</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center pt-5">
                                    <button 
                                        type="button"
                                        @click.self="isShowFilter = false" 
                                        class="px-4 py-1.5 rounded bg-brand-primary text-white"
                                    >
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Filter and Product Section -->
            <div class="flex flex-col justify-between gap-4 md:flex-row">
                <!-- Sidebar Filters (Brands, Country, Price) -->
                <div class="hidden w-full shrink-0 grow-0 space-y-4 md:block md:w-52">
                    <!-- Brand Filter -->
                    <div class="border text-sm">
                        <div class="border-b bg-gray-200 px-4 py-3">Brand</div>
                        <div class="space-y-3 bg-white px-4 py-3">
                            @foreach($brands as $brand)
                            <label class="flex cursor-pointer items-center gap-2">
                                <input type="checkbox" value="{{ $brand }}" x-model="brand" />
                                <span>{{ $brand }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Country of Origin Filter -->
                    <div class="border text-sm">
                        <div class="border-b bg-gray-200 px-4 py-3">Country Of Origin</div>
                        <div class="space-y-3 bg-white px-4 py-3">
                            @foreach($countries as $country)
                            <label class="flex cursor-pointer items-center gap-2">
                                <input type="checkbox" value="{{ $country }}" x-model="country" />
                                <span>{{ $country }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="border text-sm">
                        <div class="border-b bg-gray-200 px-4 py-3">Price</div>
                        <div class="space-y-3 bg-white px-4 py-3">
                            <label class="flex cursor-pointer items-center gap-2">
                                <input type="radio" name="price" value="high-to-low" x-model="price" />
                                <span>High To Low</span>
                            </label>
                            <label class="flex cursor-pointer items-center gap-2">
                                <input type="radio" name="price" value="low-to-high" x-model="price" />
                                <span>Low To High</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="w-full">
                    <template x-if="loading">
                        <div class="col-span-full flex justify-center items-center py-16 px-4">
                            <div class="text-center font-bold animate-pulse text-xl">Loading...</div>
                        </div>
                    </template>
                    <template x-if="!loading">
                        <div class="grid shrink grow gap-3 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4" x-html="products">
                        </div>
                    </template>

                    <template x-if="products.length === 0">
                        <div class="col-span-full flex justify-center items-center py-16 px-4">
                            <div class="text-center font-bold text-rose-500 text-xl">Product not found!</div>
                        </div>
                    </template>

                    <!-- Pagination -->
                    <template x-if="pagination">
                        <div class="mt-4" x-html="pagination" @click.prevent="handlePagination($event)"></div>
                    </template>
                </div>
            </div>
        </div>
    </section>
</x-master-layout>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('productPage', () => ({
            products: '',
            pagination: '',
            search: '',
            brand: [], // For brand filter
            country: [], // For country of origin filter
            price: '', // For price filter (radio)
            page: 1,
            loading: false,
            isShowFilter: false,

            loadStateFromUrl() {
                const url = new URL(window.location.href);
                this.search = url.searchParams.get('search') || '';
                this.brand = url.searchParams.get('brand') ? url.searchParams.get('brand').split(',') : [];
                this.country = url.searchParams.get('country') ? url.searchParams.get('country').split(',') : [];
                this.price = url.searchParams.get('price') || '';
                this.page = parseInt(url.searchParams.get('page')) || 1;

                this.loadProducts(this.page);
            },

            // Load products from the server
            loadProducts(page = 1) {
                this.loading = true;

                this.page = page;

                let params = {
                    search: this.search
                    , brand: this.brand, // Send brand array directly
                    country: this.country, // Send country array directly
                    price: this.price, // Send price (radio value)
                    page
                , };

                axios.get(`{{ route('shop.index') }}`, {params})
                    .then(response => {
                        this.products = response.data.html;
                        this.pagination = response.data.pagination;
                        this.loading = false;

                        // Update the URL with the current state
                        this.updateUrl(params);
                    })
                    .catch(error => {
                        console.log(error);
                        this.loading = false;
                    });
            },

            // Watch changes to filters and reload products
            init() {
                // Watch brand filter
                this.$watch('brand', (newValue, oldValue) => {
                    if (oldValue.length !== newValue.length || newValue.length > 0) {
                        this.loadProducts();
                    }
                });

                // Watch country filter
                this.$watch('country', (newValue, oldValue) => {
                    if (oldValue.length !== newValue.length || newValue.length > 0) {
                        this.loadProducts();
                    }
                });

                // Watch price filter
                this.$watch('price', (newValue, oldValue) => {
                    if (newValue !== oldValue && newValue !== '') {
                        this.loadProducts();
                    }
                });
            },


            // Update the browser URL with current filters and search params
            updateUrl(params) {
                const url = new URL(window.location.href);

                // Clear all query parameters first
                url.search = '';

                // Set only the query parameters that have values
                if (this.search) {
                    url.searchParams.set('search', this.search);
                }

                if (this.brand?.length) {
                    url.searchParams.set('brand', this.brand.join(',')); // Convert array to comma-separated string
                }

                if (this.country?.length) {
                    url.searchParams.set('country', this.country.join(',')); // Convert array to comma-separated string
                }

                if (this.price) {
                    url.searchParams.set('price', this.price);
                }

                if (this.page && this.page !== 1) { // Only set page if it's not the first page
                    url.searchParams.set('page', this.page);
                }

                history.pushState(null, '', url.toString());
            },

            // Handle pagination links
            handlePagination(event) {
                const target = event.target.closest('a');
                if (target && target.href) {
                    // Extract the page number from the URL
                    const url = new URL(target.href);
                    const page = url.searchParams.get('page');
                    if (page) {
                        this.page = page;
                        this.loadProducts(this.page);
                    }
                }
            },

            // Apply search filter
            applySearch(event) {
                this.search = event.target.value;
                this.loadProducts();
            }
        , }));
    });

</script>

<div class="bg-brand-primary py-2 text-xs text-white">
    <div class="container flex flex-col items-center justify-between gap-1 md:flex-row">
        <div class="flex flex-col items-center gap-1 md:flex-row md:gap-3">
            <a href="tel:+8801714244191" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="h-3 w-3">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd"></path>
                </svg><span>+88 01714 244 191</span></a><a href="tel:+8801743368889" class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="h-3 w-3">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd"></path>
                </svg>
                <span>+88 01743 368 889</span>
            </a>
        </div>
        <a href="mailto:shebaenergypower@gmail.com" class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="h-3 w-3">
                <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z"></path>
                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z"></path>
            </svg>
            <span>shebaenergypower@gmail.com</span>
        </a>
    </div>
</div>

<header class="sticky top-0 z-40 bg-white py-4 shadow">
    <div class="container flex items-center justify-between">
        <div class="shrink-0 grow-0">
            <a href="/">
                <img alt="Logo" width="120" height="45" src="{{ asset('images/logo.png') }}" />
            </a>
        </div>
        <div x-data="{isShow: false}" class="relative flex shrink items-center justify-end">
            <svg @click="isShow = !isShow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-7 text-brand-primary md:hidden">
                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"></path>
            </svg>
            <div class="md:hidden">
                <template x-if="isShow">
                    <div @click.self="isShow = false" class="fixed inset-0 z-50 flex h-screen w-screen justify-start bg-black/40">
                        <div class="h-screen w-full max-w-xs bg-white shadow-lg">
                            <div class="flex items-center justify-between px-4 py-2">
                                <a href="/">
                                    <img alt="Logo" width="120" height="45" src="{{ asset('images/logo.png') }}" />
                                </a>
                                <svg @click="isShow = false" class="size-8" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
                                </svg>
                            </div>
                            <hr>
                            <div class="py-4">
                                <div class="flex w-full flex-col items-center justify-end gap-4 md:flex-row md:gap-6 *:w-full *:cursor-pointer *:py-2 *:text-center *:md:py-0">
                                    <a href="/">Home</a>
                                    <a href="/products">Products</a>
                                    <a href="/generator-maintenance-services">Services</a>
                                    <a href="/media">Media</a>
                                    <a href="/shop">Shop</a>
                                    <a href="/contact-us">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div class="hidden md:block">
                <div class="flex w-full flex-col items-center justify-end gap-4 md:flex-row md:gap-6 *:w-full *:cursor-pointer *:py-2 *:text-center *:md:py-0">
                    <a href="/">Home</a>
                    <a href="/products">Products</a>
                    <a href="/generator-maintenance-services">Services</a>
                    <a href="/media">Media</a>
                    <a href="/shop">Shop</a>
                    <a href="/contact-us">Contact</a>
                </div>
            </div>
        </div>
    </div>
</header>

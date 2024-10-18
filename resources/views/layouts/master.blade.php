<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Sheba Energy Power' }}</title>

    <link rel="icon" href="{{ asset('images/icon.png') }}">

    <!-- Inter Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-inter antialiased bg-white">
    @include('layouts.header')

    <main class="w-full">
        {{ $slot }}
    </main>

    <footer class="bg-[#E2E2E2] py-6">
        <div class="container grid gap-4">
            <div class="flex flex-col justify-between gap-8 md:flex-row">
                <div class="flex flex-col items-center justify-center gap-4 md:items-start md:justify-start">
                    <img alt="Logo" fetchpriority="high" width="200" height="75" src="{{ asset('images/logo.png') }}" />
                    <div class="grid w-[200px] grid-cols-4 gap-3">
                        <div title="Follow on Facebook" class="flex aspect-square items-center justify-center overflow-hidden rounded">
                            <a href="https://www.facebook.com/shebaenergy" class="social-icon scale-125" target="_blank" style="display:inline-block;width:50px;height:50px;position:relative;overflow:hidden;vertical-align:middle" aria-label="facebook">
                                <span class="social-container" style="position:absolute;top:0;left:0;width:100%;height:100%">
                                    <svg role="img" aria-label="facebook social icon" class="social-svg" viewBox="0 0 64 64" style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:50%;fill-rule:evenodd">
                                        <g class="social-svg-icon" style="transition:fill 170ms ease-in-out;fill:white">
                                            <path d="M0,0H64V64H0ZM0 0v64h64V0zm39.6 22h-2.8c-2.2 0-2.6 1.1-2.6 2.6V28h5.3l-.7 5.3h-4.6V47h-5.5V33.3H24V28h4.6v-4c0-4.6 2.8-7 6.9-7 2 0 3.6.1 4.1.2z"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition:fill 170ms ease-in-out;fill:#3b5998">
                                            <path d="M0 0v64h64V0zm39.6 22h-2.8c-2.2 0-2.6 1.1-2.6 2.6V28h5.3l-.7 5.3h-4.6V47h-5.5V33.3H24V28h4.6v-4c0-4.6 2.8-7 6.9-7 2 0 3.6.1 4.1.2z"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="flex aspect-square items-center justify-center overflow-hidden rounded" title="Follow on LinkedIn">
                            <a href="https://linkedin.com/company/sheba-energy-power" class="social-icon scale-125" target="_blank" style="display:inline-block;width:50px;height:50px;position:relative;overflow:hidden;vertical-align:middle" aria-label="linkedin">
                                <span class="social-container" style="position:absolute;top:0;left:0;width:100%;height:100%">
                                    <svg role="img" aria-label="linkedin social icon" class="social-svg" viewBox="0 0 64 64" style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:50%;fill-rule:evenodd">
                                        <g class="social-svg-icon" style="transition:fill 170ms ease-in-out;fill:white">
                                            <path d="M0,0H64V64H0ZM0 0v64h64V0zm25.8 44h-5.4V26.6h5.4zm-2.7-19.7c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1M46 44h-5.4v-8.4c0-2 0-4.6-2.8-4.6s-3.2 2.2-3.2 4.5V44h-5.4V26.6h5.2V29h.1c.7-1.4 2.5-2.8 5.1-2.8 5.5 0 6.5 3.6 6.5 8.3V44z"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition:fill 170ms ease-in-out;fill:#007fb1">
                                            <path d="M0 0v64h64V0zm25.8 44h-5.4V26.6h5.4zm-2.7-19.7c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1M46 44h-5.4v-8.4c0-2 0-4.6-2.8-4.6s-3.2 2.2-3.2 4.5V44h-5.4V26.6h5.2V29h.1c.7-1.4 2.5-2.8 5.1-2.8 5.5 0 6.5 3.6 6.5 8.3V44z"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="flex aspect-square items-center justify-center overflow-hidden rounded" title="Follow on Instagram">
                            <a 
                                href="https://www.instagram.com/shebaenergypower/" 
                                class="social-icon scale-125" 
                                target="_blank" 
                                style="display:inline-block;width:50px;height:50px;position:relative;overflow:hidden;vertical-align:middle" 
                                aria-label="instagram"
                            >
                                <span class="social-container" style="position:absolute;top:0;left:0;width:100%;height:100%">
                                    <svg role="img" aria-label="instagram social icon" class="social-svg" viewBox="0 0 64 64" style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:50%;fill-rule:evenodd">
                                        <g class="social-svg-icon" style="transition:fill 170ms ease-in-out;fill:white">
                                            <path d="M0,0H64V64H0ZM0 0v64h64V0zm39.88 25.89c.98 0 1.77-.79 1.77-1.77s-.79-1.77-1.77-1.77-1.77.79-1.77 1.77.79 1.77 1.77 1.77M32 24.42c-4.18 0-7.58 3.39-7.58 7.58s3.4 7.58 7.58 7.58 7.58-3.4 7.58-7.58-3.4-7.58-7.58-7.58m0 12.5c-2.72 0-4.92-2.2-4.92-4.92s2.2-4.92 4.92-4.92 4.92 2.2 4.92 4.92-2.2 4.92-4.92 4.92m0-17.02c3.94 0 4.41.02 5.96.09 1.45.06 2.23.3 2.75.51.69.27 1.18.58 1.7 1.1.51.52.83 1.01 1.1 1.7.2.52.44 1.3.51 2.74.07 1.56.09 2.02.09 5.97 0 3.94-.02 4.4-.09 5.96-.07 1.44-.31 2.22-.51 2.74-.27.69-.59 1.19-1.1 1.7-.52.52-1.01.84-1.7 1.1-.52.2-1.3.45-2.75.51-1.55.07-2.02.09-5.96.09s-4.41-.02-5.96-.09c-1.45-.06-2.23-.3-2.75-.51-.69-.27-1.18-.58-1.7-1.1-.51-.51-.83-1.01-1.1-1.7-.2-.52-.44-1.3-.51-2.74-.07-1.56-.09-2.02-.09-5.96 0-3.95.02-4.41.09-5.97.07-1.44.31-2.22.51-2.74.27-.69.59-1.18 1.1-1.7.52-.52 1.01-.84 1.7-1.1.52-.2 1.3-.45 2.75-.51 1.55-.08 2.02-.09 5.96-.09m0-2.66c-4.01 0-4.51.02-6.09.09-1.57.07-2.64.32-3.58.68-.97.38-1.79.89-2.61 1.71s-1.33 1.65-1.71 2.61c-.36.94-.61 2.01-.68 3.59-.07 1.57-.09 2.07-.09 6.08s.02 4.51.09 6.09c.07 1.57.32 2.64.68 3.58.38.98.89 1.8 1.71 2.62s1.65 1.32 2.61 1.7c.94.37 2.01.62 3.59.69 1.57.07 2.07.09 6.09.09 4.01 0 4.51-.02 6.08-.09s2.65-.32 3.59-.69c.97-.37 1.79-.88 2.61-1.7s1.33-1.65 1.71-2.62c.36-.93.61-2.01.68-3.58.07-1.58.09-2.08.09-6.09s-.02-4.51-.09-6.09c-.07-1.57-.32-2.64-.68-3.58-.38-.98-.89-1.8-1.71-2.62a7.3 7.3 0 0 0-2.61-1.7c-.94-.37-2.01-.62-3.59-.69-1.58-.06-2.08-.08-6.09-.08"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition:fill 170ms ease-in-out;fill:#e94475">
                                            <path d="M0 0v64h64V0zm39.88 25.89c.98 0 1.77-.79 1.77-1.77s-.79-1.77-1.77-1.77-1.77.79-1.77 1.77.79 1.77 1.77 1.77M32 24.42c-4.18 0-7.58 3.39-7.58 7.58s3.4 7.58 7.58 7.58 7.58-3.4 7.58-7.58-3.4-7.58-7.58-7.58m0 12.5c-2.72 0-4.92-2.2-4.92-4.92s2.2-4.92 4.92-4.92 4.92 2.2 4.92 4.92-2.2 4.92-4.92 4.92m0-17.02c3.94 0 4.41.02 5.96.09 1.45.06 2.23.3 2.75.51.69.27 1.18.58 1.7 1.1.51.52.83 1.01 1.1 1.7.2.52.44 1.3.51 2.74.07 1.56.09 2.02.09 5.97 0 3.94-.02 4.4-.09 5.96-.07 1.44-.31 2.22-.51 2.74-.27.69-.59 1.19-1.1 1.7-.52.52-1.01.84-1.7 1.1-.52.2-1.3.45-2.75.51-1.55.07-2.02.09-5.96.09s-4.41-.02-5.96-.09c-1.45-.06-2.23-.3-2.75-.51-.69-.27-1.18-.58-1.7-1.1-.51-.51-.83-1.01-1.1-1.7-.2-.52-.44-1.3-.51-2.74-.07-1.56-.09-2.02-.09-5.96 0-3.95.02-4.41.09-5.97.07-1.44.31-2.22.51-2.74.27-.69.59-1.18 1.1-1.7.52-.52 1.01-.84 1.7-1.1.52-.2 1.3-.45 2.75-.51 1.55-.08 2.02-.09 5.96-.09m0-2.66c-4.01 0-4.51.02-6.09.09-1.57.07-2.64.32-3.58.68-.97.38-1.79.89-2.61 1.71s-1.33 1.65-1.71 2.61c-.36.94-.61 2.01-.68 3.59-.07 1.57-.09 2.07-.09 6.08s.02 4.51.09 6.09c.07 1.57.32 2.64.68 3.58.38.98.89 1.8 1.71 2.62s1.65 1.32 2.61 1.7c.94.37 2.01.62 3.59.69 1.57.07 2.07.09 6.09.09 4.01 0 4.51-.02 6.08-.09s2.65-.32 3.59-.69c.97-.37 1.79-.88 2.61-1.7s1.33-1.65 1.71-2.62c.36-.93.61-2.01.68-3.58.07-1.58.09-2.08.09-6.09s-.02-4.51-.09-6.09c-.07-1.57-.32-2.64-.68-3.58-.38-.98-.89-1.8-1.71-2.62a7.3 7.3 0 0 0-2.61-1.7c-.94-.37-2.01-.62-3.59-.69-1.58-.06-2.08-.08-6.09-.08"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="flex aspect-square items-center justify-center overflow-hidden rounded" title="Follow on Youtube">
                            <a 
                                href="https://www.youtube.com/channel/UCwQMYkA7Inm8Ihn_JPqTGNg" 
                                class="social-icon scale-125" 
                                target="_blank" 
                                style="display:inline-block;width:50px;height:50px;position:relative;overflow:hidden;vertical-align:middle" 
                                aria-label="youtube"
                            >
                                <span class="social-container" style="position:absolute;top:0;left:0;width:100%;height:100%">
                                    <svg role="img" aria-label="youtube social icon" class="social-svg" viewBox="0 0 64 64" style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:50%;fill-rule:evenodd">
                                        <g class="social-svg-icon" style="transition:fill 170ms ease-in-out;fill:white">
                                            <path d="M0,0H64V64H0ZM0 0v64h64V0zm47 33.1c0 2.4-.3 4.9-.3 4.9s-.3 2.1-1.2 3c-1.1 1.2-2.4 1.2-3 1.3-4.2.2-10.5.3-10.5.3s-7.8-.1-10.2-.3c-.7-.1-2.2-.1-3.3-1.3-.9-.9-1.2-3-1.2-3s-.3-2.4-.3-4.9v-2.3c0-2.4.3-4.9.3-4.9s.3-2.1 1.2-3c1.1-1.2 2.4-1.2 3-1.3 4.2-.3 10.5-.3 10.5-.3s6.3 0 10.5.3c.6.1 1.9.1 3 1.3.9.9 1.2 3 1.2 3s.3 2.4.3 4.9zm-18.1 2.8 8.1-4.2-8.1-4.2z"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition:fill 170ms ease-in-out;fill:#ff3333">
                                            <path d="M0 0v64h64V0zm47 33.1c0 2.4-.3 4.9-.3 4.9s-.3 2.1-1.2 3c-1.1 1.2-2.4 1.2-3 1.3-4.2.2-10.5.3-10.5.3s-7.8-.1-10.2-.3c-.7-.1-2.2-.1-3.3-1.3-.9-.9-1.2-3-1.2-3s-.3-2.4-.3-4.9v-2.3c0-2.4.3-4.9.3-4.9s.3-2.1 1.2-3c1.1-1.2 2.4-1.2 3-1.3 4.2-.3 10.5-.3 10.5-.3s6.3 0 10.5.3c.6.1 1.9.1 3 1.3.9.9 1.2 3 1.2 3s.3 2.4.3 4.9zm-18.1 2.8 8.1-4.2-8.1-4.2z"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid gap-1 text-center text-sm md:text-left lg:text-base">
                    <h3 class="text-xl font-semibold">ABOUT US</h3>
                    <a href="/about-sheba-energy-power">About Sheba Energy Power</a>
                    <a href="#">Warranty Policy</a>
                    <a href="#">Returns Policy</a>
                    <a href="#">Term &amp; condition</a>
                    <a href="#">Privacy policy</a>
                </div>
                <div class="grid gap-2 text-center text-sm md:text-left lg:text-base">
                    <h3 class="text-xl font-semibold">CONTACT US</h3>
                    <p>Call: +8801714244191, +8801743368889</p>
                    <p>Email: shebaenergypower@gmail.com</p>
                    <p>Address: House-14, Road-02, Block-D</p>
                    <p>Sector-02, Aftabnagor, Dhaka-1212.</p>
                </div>
            </div>
            <hr class="border-black">
            <div class="flex flex-col items-center justify-center gap-4 text-sm md:flex-row md:justify-between">
                <div class="text-center md:text-left">Sheba Energy Power | All Rights Reserved.</div>
                <div class="text-center md:text-right">Powered by MiniSoftImpact</div>
            </div>
        </div>
    </footer>
</body>
</html>

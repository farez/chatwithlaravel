<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased flex flex-col h-full bg-indigo-50 max-h-screen" x-data="{ open: false }">
<nav class="bg-slate-800 h-[50px]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-[50px] items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/videos" class="@if(Request::is('videos')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Videos</a>
                        <a href="/about" class="@if(Request::is('about')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                    <svg class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<main id="main" class="max-w-7xl mx-auto flex-1 flex flex-col md:flex-row relative" style="min-height: calc(100vh - 50px)">
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden z-50 bg-slate-800" id="mobile-menu" x-show="open" style="display: none;">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/videos" class="@if(Request::is('videos')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Videos</a>
            <a href="/about" class="@if(Request::is('about')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block rounded-md px-3 py-2 text-base font-medium">About</a>
        </div>
    </div>
    <div class="md:w-2/3 p-8">
        <h1 class="text-xl font-bold mb-4">Left Column</h1>
        <p class="text-lg text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros nec euismod tristique, justo lorem luctus turpis, sit amet suscipit nunc turpis sit amet sapien.</p>
    </div>
    <div class="md:w-1/3 bg-red-50 p-8 overflow-y-scroll scroll-smooth">
        <h2 class="text-xl font-bold mb-4">Right Column</h2>
        <p class="text-lg text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio ac tortor euismod consectetur. Duis eu neque eu turpis pellentesque dictum id sit amet quam.</p>
        <p class="text-lg text-gray-800">Integer id elit eu lectus pellentesque sagittis. Nulla facilisi. Nam eleifend vestibulum diam vel gravida. Phasellus ultrices, felis ac elementum consectetur, lorem orci commodo libero, a varius justo nulla eu mi.</p>
        <p class="text-lg text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu justo ac turpis interdum euismod. Nullam sed justo vel justo feugiat eleifend.</p>
        <p class="text-lg text-gray-800">Nam sit amet massa ac nibh faucibus auctor. Nullam interdum sapien a luctus cursus. Proin posuere, elit eu posuere rutrum, tellus dui pellentesque metus.</p>
        <p class="text-lg text-gray-800">Vestibulum a aliquam elit. Fusce eleifend nisi eget magna bibendum eleifend. Sed efficitur quam vitae ipsum lobortis facilisis.</p>
        <p class="text-lg text-gray-800">Sed dapibus erat a mauris dictum venenatis. Nullam consectetur, eros eget auctor accumsan, risus odio auctor nunc.</p>
        <p class="text-lg text-gray-800">Ut aliquam augue ac ante gravida, a pulvinar odio volutpat. Maecenas non sem fermentum, aliquet justo id, tincidunt odio.</p>
        <p class="text-lg text-gray-800">Suspendisse ut elit sed neque rutrum feugiat ut a diam. Pellentesque eu ex at quam iaculis fermentum eu eu justo.</p>
    </div>
</main>

</body>
</html>

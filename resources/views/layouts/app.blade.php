<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles for highlight.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/atom-one-dark.min.css">

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="OENHCIOV" defer></script>

    <!-- Crisp -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="60f7d71c-8a8a-434d-aad5-1cd0f2bd8f9c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    <title>{{ config('app.name', 'Laravel TL;DR') }} | {{ $meta_title ?? 'Chat with Laravel videos' }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased flex flex-col h-full bg-slate-900 max-h-screen" x-data="{ open: false }">
<nav class="bg-slate-800 h-[50px]">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-[50px] items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center bg-gray-300 rounded px-2 border-2 border-red-700">
                    <img class="h-8 w-8" src="/images/logo.svg" alt="{{ config('app.name') }}">
                    <div class="font-medium ml-2">{{ config('app.name') }}</div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/videos" class="@if(Request::is('videos')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Videos</a>
                        <a href="/about" class="@if(Request::is('about')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="https://github.com/users/farez/projects/1" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Roadmap</a>
                        <a href="https://github.com/farez/chatwithlaravel/" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Code</a>
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

<main id="main" class="max-w-7xl md:w-3/4 w-full mx-auto relative flex-1 flex flex-col md:flex-row " style="min-height: calc(100vh - 50px)">
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden z-50 bg-slate-800" id="mobile-menu" x-show="open" style="display: none;">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/videos" class="@if(Request::is('videos')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Videos</a>
            <a href="/about" class="@if(Request::is('about')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block rounded-md px-3 py-2 text-base font-medium">About</a>
            <a href="https://github.com/users/farez/projects/1" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Roadmap</a>
            <a href="https://github.com/farez/chatwithlaravel/" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Code</a>
        </div>
    </div>
{{--    @if(isset($page_title))--}}
{{--        <div class="max-w-7xl mt-4">--}}
{{--            <h1 class="text-3xl text-gray-200 font-bold mt-4 md:mt-0 mb-4 md:mb-16 mx-2">{{ $page_title }}</h1>--}}
{{--        </div>--}}
{{--    @endif--}}
    {{ $slot }}
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/languages/php.min.js"></script>
<script>hljs.highlightAll();</script>

</body>
</html>

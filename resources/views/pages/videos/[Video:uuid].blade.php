<?php

?>

<x-app-layout>
    <div class="w-full flex flex-col md:flex-row">
        <div class="md:w-2/3">
            <div class="video-container">
                {!! str_replace(['width="480"', 'height="270"'], '', $video->embed_html) !!}
            </div>
            <div class="bg-white text-sm px-4 py-2">
                {!! $video->title !!}
            </div>
        </div>
        <div class="md:w-1/3 bg-red-500 flex flex-grow">
            sdflsdjfnjls
        </div>
    </div>
</x-app-layout>

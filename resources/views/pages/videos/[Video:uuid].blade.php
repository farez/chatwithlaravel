<?php

?>

<x-app-layout>
    <div class="w-full flex flex-col md:flex-row">
        <div class="md:w-2/3 prose">
            <div class="video-container">
                {!! str_replace(['width="480"', 'height="270"'], '', $video->embed_html) !!}
            </div>
            <div class="text-sm md:text-base px-4 py-2">
                <div class="font-medium">
                    {!! $video->title !!}
                </div>
                <p class="hidden md:block mt-4 font-light">
                    Summary: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
                </p>
            </div>
        </div>
        <div class="md:w-1/3 flex flex-col flex-grow">
            <div class="px-4 py-2 text-sm">
                <div class="md:hidden">Summary: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.</div>
            </div>
            <div class="m-4 py-2 text-sm">
                <div class="question font-medium md:px-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor.
                </div>
                <div class="answer font-light md:px-4 py-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
                </div>
            </div>
            <div class="m-4 py-2 text-sm">
                <div class="question font-medium md:px-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor.
                </div>
                <div class="answer font-light md:px-4 py-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
                </div>
            </div>
            <div class="m-4 py-2 text-sm">
                <div class="question font-medium md:px-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor.
                </div>
                <div class="answer font-light md:px-4 py-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

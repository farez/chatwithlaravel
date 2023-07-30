<x-app-layout>
    <div class="md:w-2/3 md:p-8">
        <h1 class="hidden md:block text-3xl font-bold mb-4">{!! $video->title !!}</h1>
        <div class="video-container">
            {!! str_replace(['width="480"', 'height="270"'], '', $video->embed_html) !!}
        </div>

    </div>
    <div class="md:w-1/3 bg-red-50 p-2 overflow-y-scroll scroll-smooth">
        <div class="m-4 py-2">
            <div class="question font-medium md:px-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor.
            </div>
            <div class="answer md:px-4 py-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
            </div>
        </div>
        <div class="m-4 py-2">
            <div class="question font-medium md:px-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor.
            </div>
            <div class="answer md:px-4 py-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
            </div>
        </div>
        <div class="m-4 py-2">
            <div class="question font-medium md:px-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor.
            </div>
            <div class="answer md:px-4 py-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
            </div>
        </div>
        <div class="m-4 py-2">
            <div class="question font-medium md:px-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor.
            </div>
            <div class="answer md:px-4 py-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis orci tortor. Vivamus dui sem, interdum et nisi in, sagittis tempor orci. Morbi placerat, purus non mattis feugiat, eros augue pulvinar tellus, vel volutpat ipsum nibh sit amet magna. Ut tincidunt laoreet leo ut eleifend. Cras ultrices nibh pharetra lorem vehicula tincidunt. In hac habitasse platea dictumst. Nam ultricies nec dui id tincidunt. Sed commodo nulla ipsum, in molestie velit accumsan id.
            </div>
        </div>
    </div>
</x-app-layout>

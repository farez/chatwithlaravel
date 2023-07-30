<x-app-layout>
    <div class="md:w-2/3 md:p-8">
        <h1 class="hidden md:block text-3xl text-gray-200 font-bold mb-4">{!! $video->title !!}</h1>
        <div class="video-container">
            {!! str_replace(['width="480"', 'height="270"'], '', $video->embed_html) !!}
        </div>

    </div>
    <div class="md:w-1/3 bg-red-50 px-2 pt-2 pb-16 overflow-y-scroll scroll-smooth relative">
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
    <div class="w-full md:w-1/3 flex absolute bottom-0 right-0 p-2 mx-0 bg-white shadow-lg">
        <label class="sr-only" for="question">Ask a question</label>
        <textarea class="flex-1 mr-2 border-0" id="question" type="text" placeholder="Type a question or instruction."></textarea>
        <button>
            <span class="sr-only">Send</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:mr-0 mr-2 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
        </button>
    </div>
</x-app-layout>

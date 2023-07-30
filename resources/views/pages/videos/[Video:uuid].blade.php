<x-app-layout>
    <div class="md:w-2/3 md:p-8">
        <h1 class="hidden md:block text-gray-200 font-bold mb-4">{!! $video->title !!}</h1>
        <div class="video-container">
            {!! str_replace(['width="480"', 'height="270"'], '', $video->embed_html) !!}
        </div>

        <!-- Chat Settings -->
        <div x-data="{showsettings: true}" class="md:mt-4">
            <div x-show="! showsettings" class="w-full bg-red-50 p-2">
                <div @click="showsettings = !showsettings" class="flex justify-between">
                    <div class="text-gray-400">Chat settings</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block ml-auto w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>
            <div x-show="showsettings" class="bg-white p-2">
                <div class="flex justify-between">
                    <div class="text-gray-400">Chat settings</div>
                    <svg @click="showsettings = !showsettings" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6 block text-gray-400">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <label for="api-key">Your OpenAI API key</label>
                    <div class="flex flex-col">
                        <input class="flex-1" id="api-key" type="text">
{{--                        <button class="p-2 mt-1 bg-gray-200 hover:bg-gray-500 hover:text-white rounded">(Optional) Save to this browser</button>--}}
                    </div>
{{--                    <div class="text-sm mt-2">Your API key is transmitted to our web server and then to OpenAI's API directly. We do not store your API key on the web server. You may optionally save the key to this browser to re-use it for other videos.</div>--}}
                    <div class="text-sm mt-2">Your API key is transmitted to our web server and then to OpenAI's API directly. We do not store your API key on the web server.</div>
                </div>
            </div>
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

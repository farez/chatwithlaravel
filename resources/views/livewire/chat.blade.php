<div x-on:question-answered="scroll()" class="flex flex-col md:flex-row flex-1 relative" style="min-height: calc(100vh - 50px)">
    <div class="md:w-1/2 md:p-8 z-50">
        <h1 class="hidden md:block text-gray-200 font-bold mb-4">{!! $video->title !!}</h1>
        <div class="video-container">
            {!! str_replace(['width="480"', 'height="270"'], '', $video->embed_html) !!}
        </div>

        <!-- Chat Settings -->
        <div x-data="{showsettings: true}" class="md:mt-4">
            <div x-show="! showsettings" class="w-full bg-red-50 p-2">
                <div @click="showsettings = !showsettings" class="flex justify-start cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 block text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <div class="ml-2 text-gray-400">Chat settings</div>
                </div>
            </div>
            <div x-show="showsettings" class="bg-white p-2">
                <div class="flex justify-left cursor-pointer" @click="showsettings = !showsettings">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 block text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <div class="text-gray-400 ml-2">Chat settings</div>
                </div>
                <div class="flex flex-col my-4">
                    <label for="api-key">Your OpenAI API key <span class="text-gray-400"></span></label>
                    <div class="flex flex-col">
                        <input required class="flex-1" id="api-key" type="text" wire:model="apiKey">
                        {{--                        <button class="p-2 mt-1 bg-gray-200 hover:bg-gray-500 hover:text-white rounded">(Optional) Save to this browser</button>--}}
                    </div>
                    {{--                    <div class="text-sm mt-2">Your API key is transmitted to our web server and then to OpenAI's API directly. We do not store your API key on the web server. You may optionally save the key to this browser to re-use it for other videos.</div>--}}
                    <div class="text-sm mt-2 text-gray-400"><a target="_blank" href="https://platform.openai.com/account/api-keys" class="underline">Get your key from OpenAI</a>. Your API key is transmitted to OpenAI's API via our web server. We do not copy or store your key.</div>
                </div>
            </div>
        </div>
    </div>
    <div id="transcript" class="transcript md:w-1/2 bg-red-50 px-2 pt-2 pb-16 overflow-y-scroll scroll-smooth">
        <div class="md:px-4 m-4 py-2 text-sm border-b-2">
            <p>Ask a question in the chat box below to get started! Just like you would with ChatGPT.</p>
            <p>Examples questions you can ask:</p>
            <ul class="list-inside">
                <li>What is this talk about?</li>
                <li>List the main topics.</li>
                <li>What are some use cases mentioned?</li>
            </ul>
            <p>Limitations:</p>
            <ul class="list-inside">
                <li><a href="https://platform.openai.com/docs/guides/safety-best-practices/understand-and-communicate-limitations" target="_blank" class="underline">Answers may not be correct</a>, so always double check it.</li>
                <li>Your questions and answers are not saved and will only be remembered for 2 hours.</li>
            </ul>
        </div>
        @if($qas)
            @foreach($qas as $qa)
                <div id="qa-{{ $loop->index + 1 }}" class="m-4 py-2 text-sm">
                    <div class="question font-medium md:px-4">
                        {{ $qa['question'] }}
                    </div>
                    <div class="answer font-light md:px-4 py-2">
                        {!! $qa['formatted_answer'] !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div>
        <form wire:submit.prevent="ask" class="md:w-1/2 w-full flex flex-col absolute bottom-0 right-0 p-2 mx-0 bg-white shadow-lg">
            <label class="sr-only" for="question">Ask a question</label>
            @error('question') <div class="text-red-500">{{ $message }}</div> @enderror
            <div class="w-full flex">
                <input wire:model="question" maxlength="500" name="question" class="flex-1 mr-2 border-0" id="question" type="text" placeholder="Type a question or instruction." />
                <button class="m-2" type="submit" wire:loading.attr="disabled">
                    <span class="sr-only">Sending</span>
                    <span wire:loading.block wire:target="ask">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </span>
                    <span class="sr-only">Send</span>
                    <span wire:loading.remove wire:target="ask">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                        </svg>
                    </span>
                </button>
            </div>
        </form>
    </div>
    <script>
        function scroll() {
            setTimeout(() => {
                document.getElementById('transcript').scrollTo(0, document.getElementById('transcript').scrollHeight);
                hljs.highlightAll();
            }, 500);
        }
    </script>
</div>

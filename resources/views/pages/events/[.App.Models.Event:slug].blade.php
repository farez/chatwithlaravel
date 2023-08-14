<x-app-layout>

    <div class="md:p-8 bg-slate-900">
        <h1 class="text-3xl text-gray-200 font-bold mt-4 md:mt-0">{{ $event->title }}</h1>
        <div class="text-white">{{ $event->location }}</div>

        <ul class="padding-0 mt-4 md:mt-16">
            @foreach($event->videos as $video)

                <li>
                    <a href="/videos/{{ $video->uuid }}" class="group">
                        <div class="bg-red-50 md:p-8 p-2 m-2 rounded-lg md:flex lg:mb-16 mb-8">
                            <img class="md:w-1/3 h-full shadow-xl" src="{{ $video->thumbnail }}" alt="{{ $video->title }}" />
                            <div class="md:w-2/3 md:ml-8 mt-4 md:mt-0 group">
                                <div>
                                    {!! nl2br($video->description) !!}
                                </div>
                                <div class="bg-red-500 px-2 py-1 w-max my-4 shadow text-white flex">
                                    <span class="mr-2 group-hover:mr-4">Chat with video</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:mr-0 mr-2 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

            @endforeach
        </ul>
    </div>

</x-app-layout>

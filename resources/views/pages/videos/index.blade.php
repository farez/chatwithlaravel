<?php

use \App\Models\Event;
use function Livewire\Volt\computed;

$event = computed(fn () => Event::where('slug', 'laracon-2023')->first());

?>


<x-app-layout>

    <p>Videos from the conference. Click on a video to chat with it.</p>

    @volt
        <ul class="lg:grid lg:grid-cols-3 lg:gap-4">
            @foreach($this->event->videos as $video)

                <li>
                    <a href="/videos/{{ $video->uuid }}">
                        <img class="rounded-lg border-gray-400 border-2" src="{{ $video->thumbnail }}" alt="{{ $video->title }}" />
                    </a>
                </li>

            @endforeach
        </ul>
    @endvolt

</x-app-layout>

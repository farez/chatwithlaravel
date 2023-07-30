<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;

class Chat extends Component
{
    public $video;

    public $qas = [];

    public function mount(Video $video)
    {
        $this->video = $video;
    }

    public function render()
    {
        return view('livewire.chat');
    }

    public function ask()
    {
        $this->qas[] = [
            'question' => 'What is the meaning of life?',
            'answer' => '42',
        ];
    }
}

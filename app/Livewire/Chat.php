<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;

class Chat extends Component
{
    public $video;

    public $question;

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
        $this->validate([
            'question' => 'required|string|max:220',
        ]);

        $this->qas[] = [
            'question' => $this->question,
            'answer' => 'This is a test answer',
        ];

        $this->question = null;
    }
}

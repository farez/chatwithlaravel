<?php

namespace App\Livewire;

use App\Models\Video;
use App\QA\UserSession;
use Illuminate\Support\Str;
use Livewire\Component;
use App\QA\ChatMemory;
use App\QA\ChatLLM as LLM;

class Chat extends Component
{
    public Video $video;

    public string $question = '';
    public string $apiKey = '';

    public array $qas = [];

    public function mount(Video $video)
    {
        $this->video = $video;
        $this->qas = $video->qas()
            ->whereUuid(UserSession::getSessionUuid())
            ->oldest()
            ->get()
            ->toArray();
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

        if (empty($this->apiKey)) {
            $answer = 'Please enter your OpenAI API key.';
        } else {
            // Get the answer from LLM.
            try {
                $answer = $this->getAnswerFromAI($this->question);

                // Persist this Q&A to the database.
                $this->video->qas()->create([
                    'uuid' => UserSession::getSessionUuid(),
                    'question' => $this->question,
                    'answer' => $answer,
                    'formatted_answer' => Str::markdown($answer),
                    'response_data' => LLM::getLastResponseData(),
                ]);
            } catch (\Exception $e) {
                $answer = $e->getMessage();
            }
        }

        // Add this Q&A to the transcript for display.
        $this->qas[] = [
            'question' => $this->question,
            'formatted_answer' => Str::markdown($answer),
        ];

        $this->reset('question');
    }

    public function getAnswerFromAI($message): string
    {
        // Turn question into embedding.
//        $messageEmbedding = Embeddings::create($message);

        // Get transcript of video.
        $transcript =[
            ['content' => $this->video->transcript],
        ];

        // Include chat history
        $memory = ChatMemory::forVideo($this->video->id);

        // Ask LLM.
        return LLM::chat($message, $transcript, $memory, $this->apiKey);
    }
}

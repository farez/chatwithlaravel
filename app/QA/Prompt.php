<?php

namespace App\QA;

use Gioni06\Gpt3Tokenizer\Gpt3Tokenizer;
use Gioni06\Gpt3Tokenizer\Gpt3TokenizerConfig;
use App\QA\ChatLLM as LLM;

class Prompt
{
    // USer prompt. Used for chat completion with memory
    protected static $chatSystemPrompt = "You are an assistant that helps summarize video transcripts of technical presentations. \nYou will be provided with a transcript from a video, and your task is to answer questions from human, using information from the transcript. You may generate suggestions and recommendations, or rewrite the document content, but your answers must match all the facts in the provided transcript.\n\nThe transcript will be provided after the text 'VIDEO TRANSCRIPT >>>'\nEach line in the transcript begins with two numbers separated by a colon, signifying the timestamp in the video when the words after it were said. Cite references to the video using the [timestamp] notation, e.g. [3:04]. Ignore outlier information which has nothing to do with the question. Use paragraphs to make reading clearer. If the question requires a table or list, provide them in markdown format.\n";

    // User prompt. Used for chat completion with memory
    protected static $userChatPromptTemplate = "VIDEO TRANSCRIPT >>> \n--INFO-- \n\n--MEMORY--\n\nQuestion: --QUESTION-- \nAnswer: \n\n";

    /**
     * Create the user prompt for chat.
     * @param $question
     * @param $matches
     * @param $memory
     * @param string $additionalText - Text to include in the token count, but not in the prompt.
     * @return string
     */
    private static function makeChatUserPrompt($question, $matches, $memory, $additionalText = '')
    {
        // Insert question
        $prompt = str_replace('--QUESTION--', $question, self::$userChatPromptTemplate);

        // Insert memory
        $prompt = str_replace('--MEMORY--', self::stringifyMemory($memory), $prompt);

        // Init token counter
        $config = new Gpt3TokenizerConfig();
        $tokenizer = new Gpt3Tokenizer($config);

        // Token limit.
        $maxTokens = LLM::getMaxPromptTokens();

        // Build the content sources, and stop before we reach the token limit.
        // We add any $additionalText that we want to include in the token calculation.
        $sources = '';
        foreach ($matches as $match) {
//            $sourceCandidate = "\n Page " . $match->page_number . ': ' . $match->content;
            $sourceCandidate = "\n";
            if (isset($match['page_number'])) {
                $sourceCandidate = $sourceCandidate . 'Page ' .$match['page_number'] . ': ';
            }
            $sourceCandidate = $sourceCandidate . $match['content'];
            if ($tokenizer->count($additionalText . $prompt . $sources . $sourceCandidate) >  $maxTokens) {
                break;
            }
            $sources = $sources . $sourceCandidate;
        }

        // Insert document content
        $prompt = str_replace('--INFO--', $sources, $prompt);

        // Return the prompt
        return $prompt;
    }

    /**
     * Convert memory items to text for prompt.
     * @param $qas
     * @return string
     */
    public static function stringifyMemory($qas): string
    {
        $memoryText = '';
        foreach ($qas as $qa) {
            $question = 'Question: '.$qa->question;
            $answer = 'Answer: '.$qa->answer;
            $memoryText .= $question."\n".$answer."\n\n";
        }

        return $memoryText;
    }


    /**
     * Create prompt for chat completion model, e.g. gpt-3.5-turbo.
     * @param $question
     * @param $matches
     * @return string
     */
    public static function forChat($question, $matches, $memory)
    {
        return self::makeChatUserPrompt($question, $matches, $memory, self::$chatSystemPrompt . "\n");
    }

    public static function getSystemPrompt()
    {
        return self::$systemPrompt;
    }

    public static function getChatSystemPrompt()
    {
        return self::$chatSystemPrompt;
    }
}

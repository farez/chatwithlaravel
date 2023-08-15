<?php

namespace App\QA;

use OpenAI;

class ChatLLM
{
    public static array $lastResponseData = [];

    public static int $maxTokens = 16388; // 16k
    public static int $maxCompletionTokens = 256;

    public static function ask($question, $matches)
    {
        return self::chat($question, $matches);
    }

//    public static function complete($question, $matches)
//    {
//        $prompt = Prompt::forCompletion($question, $matches);
//
//        $response = OpenAI::completions()->create([
//            'model' => 'text-davinci-003',
//            'prompt' => $prompt,
//            'max_tokens' => self::$maxCompletionTokens,
//            'temperature' => 0,
//            'n' => 1,
//        ])->toArray();
//
//        self::$lastResponseData = $response;
//
//        return $response['choices'][0]['text'];
//    }

    public static function chat(string $question, $matches, $memory, $apiKey)
    {
        $systemPrompt = Prompt::getChatSystemPrompt();
        $userPrompt = Prompt::forChat($question, $matches, $memory);

        $params = [
            'model' => 'gpt-3.5-turbo-16k',
            'messages' => [
                ['role' => 'system', 'content' => $systemPrompt],
                ['role' => 'user', 'content' => $userPrompt],
            ],
            'max_tokens' => self::$maxCompletionTokens,
            'temperature' => 0,
            'n' => 1
        ];

        $client = OpenAI::client($apiKey);
        $response = $client->chat()->create($params)->toArray();

        self::$lastResponseData = $response;

        return $response['choices'][0]['message']['content'];
    }

    public static function getLastResponseData()
    {
        return self::$lastResponseData;
    }

    public static function getMaxTokens()
    {
        return self::$maxTokens;
    }

    public static function getMaxCompletionTokens()
    {
        return self::$maxCompletionTokens;
    }

    public static function getMaxPromptTokens()
    {
        return self::$maxTokens - self::$maxCompletionTokens;
    }
}

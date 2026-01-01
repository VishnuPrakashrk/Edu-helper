<?php

namespace App\Agents;

use Illuminate\Support\Facades\Session;

abstract class BaseAgent
{
    protected string $systemPrompt = '';
    protected bool $rememberConversation = false;

    public function respond(string $message): string
    {
        $history = [];

        if ($this->rememberConversation) {
            $history = Session::get('chat_history', []);
        }

        $history[] = $message;

        Session::put('chat_history', $history);

        return $this->generateResponse($message);
    }

    abstract protected function generateResponse(string $message): string;
}

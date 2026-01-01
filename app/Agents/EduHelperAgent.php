<?php

namespace App\Agents;

class EduHelperAgent extends BaseAgent
{
    protected bool $rememberConversation = true;

    protected function generateResponse(string $message): string
    {
        $msg = strtolower($message);

        if (
            !str_contains($msg, 'solar') &&
            !str_contains($msg, 'fraction') &&
            !str_contains($msg, 'water')
        ) {
            return "I can only help with Solar System, Fractions, or Water Cycle for now 😊";
        }

        if (str_contains($msg, 'solar')) {
            return "Hello! The Solar System includes the Sun and eight planets that revolve around it due to gravity.";
        }

        if (str_contains($msg, 'fraction')) {
            return "Hi! Fractions represent parts of a whole, written as a numerator over a denominator, like 1/2.";
        }

        if (str_contains($msg, 'water')) {
            return "Hello! The water cycle shows how water evaporates, condenses into clouds, and falls as rain.";
        }

        return "I can only help with Solar System, Fractions, or Water Cycle for now 😊";
    }
}

<?php

namespace BrainGames\Games\CalcGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function calcGame(): void
{
    $gameDescription = 'What is the result of the expression?';
    $gameQuestions = [];
    $gameAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $operationNumber = rand(1, 3);
        switch ($operationNumber) {
            case 1:
                $gameQuestions[] = "{$firstNumber} + {$secondNumber}";
                $gameAnswers[] = $firstNumber + $secondNumber;
                break;
            case 2:
                $gameQuestions[] = "{$firstNumber} - {$secondNumber}";
                $gameAnswers[] = $firstNumber - $secondNumber;
                break;
            case 3:
                $gameQuestions[] = "{$firstNumber} * {$secondNumber}";
                $gameAnswers[] = $firstNumber * $secondNumber;
                break;
        }
    }
    gameEngine($gameDescription, $gameQuestions, $gameAnswers);
}

<?php

namespace BrainGames\Games\GcdGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function gcdGame(): void
{
    $gameDescription = 'Find the greatest common divisor of given numbers.';
    $gameQuestions = [];
    $gameAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $gameQuestions[] = "{$firstNumber} {$secondNumber}";
        //Euclidean  algorithm, finding GCD
        while ($firstNumber != 0 and $secondNumber != 0) {
            if ($firstNumber > $secondNumber) {
                $firstNumber = $firstNumber % $secondNumber;
            } else {
                $secondNumber = $secondNumber % $firstNumber;
            }
        }
        $correctAnswer = $firstNumber + $secondNumber;
        $gameAnswers[] = $correctAnswer;
    }
    gameEngine($gameDescription, $gameQuestions, $gameAnswers);
}

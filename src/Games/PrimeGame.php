<?php

namespace BrainGames\Games\PrimeGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function primeGame(): void
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameQuestions = [];
    $gameAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = 'yes';
        //Checking is number prime
        if ($randomNumber == 1) {
            $correctAnswer = 'no';
        } else {
            for ($x = 2; $x <= sqrt($randomNumber); $x++) {
                if ($randomNumber % $x == 0) {
                    $correctAnswer = 'no';
                }
            }
        }
        $gameAnswers[] = $correctAnswer;
        $gameQuestions[] = $randomNumber;
    }
    gameEngine($gameDescription, $gameQuestions, $gameAnswers);
}

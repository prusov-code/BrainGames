<?php

namespace BrainGames\Games\PrimeGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function isPrime(int $number): bool
{
    if ($number == 1) {
        return 0;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return 0;
            }
        }
    }
    return 1;
}

function primeGame(): void
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameQuestions = [];
    $gameAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        $gameAnswers[] = isPrime($randomNumber) ? 'yes' : 'no';
        $gameQuestions[] = $randomNumber;
    }
    gameEngine($gameDescription, $gameQuestions, $gameAnswers);
}

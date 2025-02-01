<?php

namespace BrainGames\Games\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function evenGame(): void
{
    $gameDescription = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameQuestions = [];
    $gameAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = $randomNumber % 2 == 0 ? 'yes' : 'no';
        $gameQuestions[] = $randomNumber;
        $gameAnswers[] = $correctAnswer;
    }
    gameEngine($gameDescription, $gameQuestions, $gameAnswers);
}

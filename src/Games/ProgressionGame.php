<?php

namespace BrainGames\Games\ProgressionGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function progressionGame(): void
{
    $gameDescription = 'What number is missing in the progression?';
    $gameQuestions = [];
    $gameAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $difference = rand(2, 10);
        $currentNumber = rand(2, 100);
        $progressionLength = rand(10, 15);
        $hiddenIndex = rand(0, $progressionLength - 1);
        $questionString = "";
        for ($x = 0; $x < $progressionLength; $x++) {
            if ($x != $hiddenIndex) {
                $questionString .= "{$currentNumber} ";
                $currentNumber += $difference;
            } else {
                $questionString .= ".. ";
                $gameAnswers[] = $currentNumber;
                $currentNumber += $difference;
            }
        }
        $gameQuestions[] = trim($questionString);
    }
    gameEngine($gameDescription, $gameQuestions, $gameAnswers);
}

<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\welcomeUser;

function gameEngine(string $gameDescription, array $gameQuestions, array $gameAnswers): void
{
    $userName = welcomeUser();
    line($gameDescription);
    for ($i = 0; $i < 3; $i++) {
        line('Question: %s', $gameQuestions[$i]);
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $gameAnswers[$i]) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $gameAnswers[$i]);
            line("Let's try again, %s!", $userName);
            return;
        }
    }
    line('Congratulations, %s!', $userName);
}

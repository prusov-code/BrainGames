<?php

namespace Brain\Games\Even\Game;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\welcomeUser;

function evenGame(): void
{
    $userName = welcomeUser();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = $randomNumber % 2 == 0 ? 'yes' : 'no';
        line('Question: %d', $randomNumber);
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }
    line('Congratulations, %s!', $userName);
}

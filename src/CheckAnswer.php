<?php

namespace Php\Project\CheckAnswer;

use function cli\line;

function checkAnswer(string $answer, string $right, string $name)
{
    if ($answer === $right) {
        $message = 'Correct!';
        $result = true;
    } else {
        $message = "'{$answer}' is wrong answer ;(. Correct answer was '{$right}'.\nLet's try again, {$name}!";
        $result = false;
    }
    line($message);
    return $result;
}

<?php

namespace Php\Project\Engine;

use function Php\Project\Rules\greeting;
use function Php\Project\GetAnswer\getAnswer;
use function Php\Project\CheckAnswer\checkAnswer;

function round(string $name, callable $question, callable $right)
{
    $item = $question();
    $answer = getAnswer($item);
    $correct = $right($item);
    $check = checkAnswer($answer, $correct, $name);
    return $check;
}

function engine(string $rules, callable $question, callable $right)
{
    $name = greeting($rules);
    $maxRounds = 3;
    $round = 0;
    $win = 0;
    do {
        $check = round($name, $question, $right);
        if ($check) {
            $win++;
        }
        $round++;
    } while ($check && $round < $maxRounds);

    if ($win === $maxRounds) {
        echo "Congratulations, {$name}!\n";
    }
}

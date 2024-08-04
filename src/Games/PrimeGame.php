<?php

namespace Php\Project\Games\PrimeGame;

use function Php\Project\Engine\engine;

function primeGame()
{
    $question = function () {
        $question = rand(1, 101);
        return $question;
    };

    $right = function ($question) {
        $number = (int) $question;
        $right = 'yes';
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $right = 'no';
            }
        }
        return $right;
    };

    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine($rules, $question, $right);
}

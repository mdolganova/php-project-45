<?php

namespace Php\Project\Games\GcdGame;

use function Php\Project\Engine\engine;

function gcdGame()
{
    $question = function () {
        $x = rand(1, 101);
        $y = rand(1, 101);
        $expression = "{$x} {$y}";
        return $expression;
    };

    $right = function ($question) {
        $elements = explode(' ', $question);
        $x = (int) $elements[0];
        $y = (int) $elements[1];
        $iter = min($x, $y);
        $max = 1;
        for ($i = 1; $i <= $iter; $i++) {
            if (($x % $i === 0) && ($y % $i === 0)) {
                $max = $i;
            }
        }
        return (string) $max;
    };

    $rules = 'Find the greatest common divisor of given numbers.';
    engine($rules, $question, $right);
}

<?php

namespace Php\Project\Games\EvenGame;

use function Php\Project\Engine\engine;

function evenGame()
{
    $question = function () {
        $question = rand(1, 101);
        return $question;
    };

    $right = function ($question) {
        $right = ($question % 2) ? 'no' : 'yes';
        return $right;
    };

    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    engine($rules, $question, $right);
}

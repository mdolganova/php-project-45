<?php

namespace Php\Project\Games\EvenGame;

use function Php\Project\Engine\engine;

function evenGame()
{
    $question = function () {
        $question = rand(1, 101);
        return (string) $question;
    };

    $right = function ($question) {
        $check = (int) $question;
        $right = null;
        if ($check % 2 === 0) {
            $right = 'yes';
        } else {
            $right = 'no';
        }
        return $right;
    };

    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    engine($rules, $question, $right);
}

<?php

namespace Php\Project\Games\PrimeGame;

use function Php\Project\Engine\engine;

function primeGame()
{
    $question = function () {
        $question = rand(0, 101);
        return $question;
    };

    $right = function ($question) {
        $number = (int) $question;
        if ($number === 0) {
          return 'no';
        }
        if ($number === 1) {
          return 'yes';
        }
        for ($i = 2; $i < $number; $i++) {
          if ($number % $i === 0) {
            return 'no';
          }
        }
        return 'yes';
    };

    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine($rules, $question, $right);
}

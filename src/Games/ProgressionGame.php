<?php

namespace Php\Project\Games\ProgressionGame;

use function Php\Project\Engine\engine;

function progressionGame()
{
    $question = function () {
        $start = rand(0, 101);
        $step = rand(1, 10);
        $count = rand(5, 10);
        $hide = rand(0, $count - 1);
        $end = $start + $step * ($count - 1);
        $elements = [];
        for ($i = $start; $i <= $end; $i += $step) {
          $elements[] = $i;
        }
        $elements[$hide] = '..';
        $expression = implode(' ', $elements);
        return $expression;
    };

    $right = function ($question) {
        $elements = explode(' ', $question);
        $position = array_search('..', $elements);
        $i = 0;
        $step = false;
        while (!$step) {
          if ($elements[$i] !== '..' && $elements[$i + 1] !== '..') {
            $step = (int) $elements[$i + 1] - (int) $elements[$i];
          }
          $i++;
        }
        if ($position === 0) {
          $hide = (int) $elements[1] - $step;
        } else {
          $hide = (int) $elements[$position - 1] + $step;
        }
        return (string) $hide;
    };

    $rules = 'What number is missing in the progression?';
    engine($rules, $question, $right);
}

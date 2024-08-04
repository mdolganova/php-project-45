<?php

namespace Php\Project\Games\CalcGame;

use function Php\Project\Engine\engine;

function calcGame()
{
    $question = function () {
        $operations = ['+', '-', '*'];
        $operationNumber = rand(0, 2);
        $operation = $operations[$operationNumber];
        $x = rand(0, 101);
        $y = random_int(0, 101);
        $expression = "{$x} {$operation} {$y}";
        return $expression;
    };

    $right = function ($question) {
        $elements = explode(' ', $question);
        $x = (int) $elements[0];
        $y = (int) $elements[2];
        $operand = $elements[1];
        switch ($operand) {
            case '+':
                $result = $x + $y;
                break;
            case '-':
                $result = $x - $y;
                break;
            case '*':
                $result = $x * $y;
                break;
            default:
                break;
        }
        return (string) $result;
    };

    $rules = 'What is the result of the expression?';
    engine($rules, $question, $right);
}

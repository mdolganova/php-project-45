<?php

namespace Php\Project\GetAnswer;

use function cli\line;
use function cli\prompt;

function getAnswer($question)
{
    line("Question: {$question}");
    $answer = prompt('Your answer');
    return $answer;
}

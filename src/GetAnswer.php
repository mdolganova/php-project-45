<?php

namespace Php\Project\GetAnswer;

use function cli\line;
use function cli\prompt;

function getAnswer(string $question)
{
    line("Question: {$question}");
    $answer = prompt('Your answer');
    return $answer;
}

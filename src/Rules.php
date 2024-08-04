<?php

namespace Php\Project\Rules;

use function cli\line;
use function cli\prompt;

function greeting($rules)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
    line($rules);
    return $name;
}

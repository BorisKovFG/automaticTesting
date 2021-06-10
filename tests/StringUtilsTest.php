<?php

require_once __DIR__ . '/../vendor/autoload.php';

use function StringUtils\capitalize;

if (capitalize('hello') !== 'Hello') {
    throw new Exception('it does not work');
}

print_r("It works!\n");
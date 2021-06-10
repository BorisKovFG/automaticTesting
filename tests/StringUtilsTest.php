<?php

require_once __DIR__ . '/../vendor/autoload.php';

use function StringUtils\capitalize;
use Webmozart\Assert\Assert;

// first assert (checking for word)
if (capitalize('hello') !== 'Hello') {
    throw new Exception('it does not work');
}
// second assert (checking for empty string)
if (capitalize('') !== '') {
    throw new Exception('it does not work');
}

assert(capitalize('') === '');
assert(capitalize('hello') === 'Hello');

Assert::eq(capitalize(''), '', "It does not work!");
Assert::eq(capitalize('hello'), 'Hello', "It does not work!");


print_r("It works!\n");
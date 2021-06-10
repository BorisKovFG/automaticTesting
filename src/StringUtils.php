<?php

namespace StringUtils;

$text = "hi";

function capitalize(string $text) : string
{
    if ($text === '') return '';
    return ucfirst($text);
}

var_dump(capitalize($text));
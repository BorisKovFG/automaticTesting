<?php

namespace StringUtils;

$text = "hi";

function capitalize(string $text) : string
{
    return ucfirst($text);
}

var_dump(capitalize($text));
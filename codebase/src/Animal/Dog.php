<?php

namespace PHPTdd\Animal;

class Dog
{
    function bark(string $str = 'nothing'): string
    {
        return $str . '. Debug';
    }
}

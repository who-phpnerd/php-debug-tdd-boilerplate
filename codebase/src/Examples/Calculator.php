<?php

namespace PHPTdd\Examples;

/**
 * Provides calculation services for basic math operations
 */
class Calculator
{
    /**
     * Calculates the sum of given integers as argument
     * @param int $arg1
     * @param int $arg2
     * @param int $arg3
     * @return int
     */
    public function calculateSum(int $arg1, int $arg2, int $arg3): int
    {
        return $arg1 + $arg2 + $arg3;
    }

    public function abc(): void
    {
        //TODO 
        throw new \Exception();
    }
}

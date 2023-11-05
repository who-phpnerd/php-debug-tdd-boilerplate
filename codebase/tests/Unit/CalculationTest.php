<?php

namespace PHPTdd\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PHPTdd\Examples\Calculator;
use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(Calculator::class)]
// #[CoversFunction('calculateSum')]
class CalculationTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanCalculateTotal()
    {
        // Expected result 6

        //Test data
        $a = 1;
        $b = 2;
        $c = 3;

        $calculator = new Calculator();

        $this->assertEquals($calculator->calculateSum($a, $b, $c), 6);
    }
}

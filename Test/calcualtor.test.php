<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddMethod()
    {
        $calc = new Calculator();
        $x = 1;
        $y = 2;

        $result = $calc->add($x, $y);

        $this->assertEquals($result, $x + $y);
        $this->assertEquals(2, $calc->getNsVal());
    }
}


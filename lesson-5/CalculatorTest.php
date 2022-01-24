<?php

require_once 'PHPUnit/Framework.php';

/**
 * Class CalculatorTest
 */
class CalculatorTest extends TestCase
{
    public function testGetPower()
    {
        $calculator = new Calculator();
        $powerResult = $calculator->getPower(2, 3);
        $this->assertEquals(8, $powerResult);
    }

    public function providerGetPower()
    {
        return [
            [2, 2, 4],
            [2, 3, 9],
            [3, 5, 243],
        ];
    }

}

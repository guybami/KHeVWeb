<?php

include "Models/Calculator.php";

/**
 * CalculatorTest short summary.
 *
 * CalculatorTest description.
 *
 * @version 1.0
 * @author gbami
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{


    function testSum(){
        $cal = new Calculator();
        $result = $cal->getSum(1, 4);
        $this->assertTrue($result == 5);
    }
}
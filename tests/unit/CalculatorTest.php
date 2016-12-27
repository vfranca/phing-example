<?php
use MyPackage\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    protected $calc;

    public function setup() 
    {
        $this->calc = new Calculator();
    }

    public function testAdd() 
    {
       $this->assertEquals(4, $this->calc->add(2,2), 'Soma incorreta');
    }

    public function testSubtract() 
    {
        $this->assertEquals(4, $this->calc->subtract(6, 2), 'A subtra��o est� incorreta');
    }
}

<?php
use PHPUnit_Framework_TestCase as PHPUnit;
use App\Calculator;

class CalculatorTest extends PHPUnit
{
    protected $calc;

    public function setup() 
    {
        $this->calc = new \App\Calculator();
    }

    public function testAdd() 
    {
       $this->assertEquals(4, $this->calc->add(2,2), 'Soma incorreta');
    }

    public function testSubtract() 
    {
        $this->assertEquals(4, $this->calc->subtract(6, 2), 'A subtração está incorreta');
    }
}

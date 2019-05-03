<?php
namespace Test;

require_once('calculator.class.php');

class Calculator extends \Main\Calculator
{
    protected $nsVal;
    public function __construct() {
        $this->nsVal = 2;
    }

    public function getNsVal() {
        return $this->nsVal;
    }
}

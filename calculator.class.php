<?php
namespace Main;

class Calculator
{
    protected $nsVal;
    public function __construct() {
        $this->nsVal = 1;
    }

    public function add($x, $y) {
        return $x + $y;
    }

    public function getNsVal() {
        return $this->nsVal;
    }
}

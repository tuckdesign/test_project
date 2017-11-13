<?php

class TestClass2 {
    
    public $testVar2 = 'test';
    
    public function method2($arg1, $arg2, $qrg3 = null) {
        return $this->testVar2;
    }
    
    public function testFirstClass() {
        $class1 = new TestClass1();
        $class1->method(1, 2, 3);
        TextClass1::staticMethod();
    }
}
<?php

class TestClass1 {
    
    public $testVar = 'test';
    
    public function method($arg1, $arg2, $qrg3 = null) {
        return $this->testVar;
    }
    
    public static function staticMethod() {
        return 'I am static';
    }
}
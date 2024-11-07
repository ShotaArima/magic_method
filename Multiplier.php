<?php

namespace Vendor\Package;

class Multiplier {
    private $factor;
    
    public function __construct($factor) {
        $this->factor = $factor;
    }
    
    public function __invoke($value) {
        return $value*$this->factor;
    }
}
$double = new Multiplier(2); // __constructメソッドが使用されている
echo $double(5); // __invokeメソッドが使われる

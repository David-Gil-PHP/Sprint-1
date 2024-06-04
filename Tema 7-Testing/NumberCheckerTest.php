<?php
/* Casuístiques:
- __construct(int $number): Número enter, número amb decimals, caràcter distint a un número enter, número 0
- isEven(): Número parell, imparell, número 0
- isPositive(): Número positiu, negatiu, número 0
*/
require 'NumberChecker.php';

class NumberCheckerTest extends \PHPUnit\Framework\TestCase {
    
    public function testClassConstructor(): void
    {
        $numero = new NumberChecker(2);
        $this->assertSame(2, $numero->number);
    }
    public function testIsEven(): void
    {
        $numParell = new NumberChecker(2);
        $this->assertTrue($numParell->isEven());

        $numImparell = new NumberChecker(5);
        $this->assertNotTrue($numImparell->isEven());
        
        $numZero = new NumberChecker(0);
        $this->assertTrue($numZero->isEven());
    }

    public function testIsPositive()
    {
        $numParell = new NumberChecker(1);
        $this->assertTrue($numParell->isPositive());

        $numImparell = new NumberChecker(-4);
        $this->assertNotTrue($numImparell->isPositive());
        
        $numZero = new NumberChecker(0);
        $this->assertNotTrue($numZero->isPositive());
    }
}

?>
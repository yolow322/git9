<?php

use PHPUnit\Framework\TestCase;

class NumbersTest extends TestCase
{

    public function testDivNumbers()
    {
        $obj1 = new Numbers(2, 4);
        $this->assertEquals(16, $obj1->powNumbers(2, 4));
    }

    public function testPowNumbers()
    {
        $obj2 = new Numbers(4, 4);
        $this->assertEquals(1, $obj2->divNumbers(4, 4));
    }
}

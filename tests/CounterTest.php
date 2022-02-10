<?php 

namespace Mosyq\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase 
{
    
    public function testCounter()
    {
        $counter = new Counter;
        $counter->increment();
        $counter->increment();
        $counter->increment();
        $counter->increment();
        $this->assertEquals(4, $counter->getCounter());
        // echo "ini : " . $counter->getCounter() . PHP_EOL;
    }
}
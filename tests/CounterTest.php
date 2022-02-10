<?php 

namespace Mosyq\Test;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase 
{
    
    public function testCounter()
    {
        $counter = new Counter;
        $counter->increment();
        echo "ini : " . $counter->getCounter() . PHP_EOL;
    }
}
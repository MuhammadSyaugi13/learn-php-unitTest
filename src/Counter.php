<?php 

namespace Mosyq\Test;

class Counter 
{
    private $counter = 0;

    public function increment(): void
    {
        $this->counter++;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }
}
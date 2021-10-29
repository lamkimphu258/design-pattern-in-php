<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class WorkFromHomePC extends PC
{
    public function __construct()
    {
        parent::__construct('Work From Home PC: 8GB ram, CPU Candy, SSD 1TB, Flash Network Driver', 99.99);
    }
}

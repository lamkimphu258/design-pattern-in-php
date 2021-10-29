<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class StudentPC extends PC
{
    public function __construct()
    {
        parent::__construct('Student PC: 8GB ram, CPU Ant', 9.99);
    }
}

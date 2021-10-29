<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class RamABC8Gb extends Hardware
{
    public function __construct(PC $pc)
    {
        parent::__construct($pc, 'Ram ABC 8 GB', 9.9);
    }
}

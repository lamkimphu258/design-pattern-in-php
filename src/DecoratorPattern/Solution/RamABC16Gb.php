<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class RamABC16Gb extends Hardware
{
    public function __construct(PC $pc)
    {
        parent::__construct($pc, 'Ram ABC 16 GB', 19.9);
    }
}

<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class FansRGB extends Hardware
{
    public function __construct(PC $pc)
    {
        parent::__construct($pc, 'Fan sRGB', 9.9);
    }
}

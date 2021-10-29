<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class FanRGB extends Hardware
{
    public function __construct(PC $pc)
    {
        parent::__construct($pc, 'Fan RGB', 10.9);
    }
}

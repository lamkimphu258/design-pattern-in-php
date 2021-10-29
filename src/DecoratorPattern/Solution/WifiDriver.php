<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class WifiDriver extends Hardware
{
    public function __construct(PC $pc)
    {
        parent::__construct($pc, 'Wifi Driver', 9.9);
    }
}

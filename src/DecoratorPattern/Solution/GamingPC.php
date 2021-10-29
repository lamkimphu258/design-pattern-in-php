<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

class GamingPC extends PC
{
    public function __construct()
    {
        parent::__construct('Gaming PC: 8GB ram, CPU Tiger, VGA chaos, SSD 512GB', 199.99);
    }
}

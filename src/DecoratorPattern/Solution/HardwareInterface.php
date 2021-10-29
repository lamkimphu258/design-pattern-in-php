<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

interface HardwareInterface
{
    public function getSpecification(): string;

    public function getCost(): float;
}

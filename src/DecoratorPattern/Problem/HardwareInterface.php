<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Problem;

interface HardwareInterface
{
    public function getName(): string;

    public function getCost(): float;
}

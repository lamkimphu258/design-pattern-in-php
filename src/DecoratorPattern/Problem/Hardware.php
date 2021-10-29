<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Problem;

abstract class Hardware implements HardwareInterface
{
    public function __construct(
        protected string $name,
        protected float $cost
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCost(): float
    {
        return $this->cost;
    }
}

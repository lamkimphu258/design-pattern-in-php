<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

abstract class Hardware extends PC implements HardwareInterface
{
    public function __construct(
        protected PCInterface $pc,
        protected string $specification,
        protected float $cost
    ) {

    }

    public function getSpecification(): string
    {
        return $this->pc->getSpecification().', '.$this->specification;
    }

    public function getCost(): float
    {
        return $this->pc->getCost() + $this->cost;
    }
}

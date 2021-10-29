<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

abstract class PC implements PCInterface
{
    public function __construct(
        protected string $specification,
        protected float $cost
    ) {
    }

    public function __toString(): string
    {
        return $this->getSpecification().' will cost '.$this->getCost().PHP_EOL;
    }

    public function getSpecification(): string
    {
        return $this->specification;
    }

    public function getCost(): float
    {
        return $this->cost;
    }
}

<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Problem;

abstract class PC implements PCInterface
{
    protected HardwareInterface $ram;

    protected HardwareInterface $fan;

    public function __construct(
        protected string $specification,
        protected float $cost
    ) {
    }

    public function getSpecification(): string
    {
        return $this->specification;
    }

    public function addRam(Ram $ram)
    {
        $this->ram = $ram;
    }

    public function addFan(Fan $fan)
    {
        $this->fan = $fan;
    }

    public function __toString(): string
    {
        return $this->specification.','.$this->ram->getName().','.$this->fan->getName().
            ' will cost '.
            ($this->getCost() + $this->ram->getCost() + $this->fan->getCost()).PHP_EOL;
    }

    public function getCost(): float
    {
        return $this->cost;
    }
}

<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

interface PCInterface
{
    public function getSpecification(): string;

    public function getCost(): float;
}

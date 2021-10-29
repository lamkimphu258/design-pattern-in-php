<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Problem;

interface PCInterface
{
    public function getSpecification(): string;

    public function getCost(): float;
}

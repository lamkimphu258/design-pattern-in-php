<?php

namespace Lkp\DesignPatternInPhp\StrategyPattern\Solution;

class AttackBySword implements AttackStrategy
{
    public function attack()
    {
        echo 'Attack by Sword'.PHP_EOL;
    }
}

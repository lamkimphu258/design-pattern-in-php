<?php

namespace Lkp\DesignPatternInPhp\StrategyPattern\Solution;

class AttackByChaosSword implements AttackStrategy
{
    public function attack()
    {
        echo 'Attack by Chaos Sword'.PHP_EOL;
    }
}

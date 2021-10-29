<?php

namespace Lkp\DesignPatternInPhp\StrategyPattern\Solution;

class AttackByBloodSword implements AttackStrategy
{
    public function attack()
    {
        echo 'Attack by Blood Sword'.PHP_EOL;
    }
}

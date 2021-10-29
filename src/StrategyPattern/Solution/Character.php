<?php

namespace Lkp\DesignPatternInPhp\StrategyPattern\Solution;

abstract class Character
{
    public function __construct(
        private AttackStrategy $attackStrategy
    ) {
    }

    public function changeAttackStrategy(AttackStrategy $attackStrategy)
    {
        $this->attackStrategy = $attackStrategy;
    }

    public function attack()
    {
        echo $this->attackStrategy->attack();
    }
}

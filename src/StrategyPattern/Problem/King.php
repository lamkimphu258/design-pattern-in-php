<?php

namespace Lkp\DesignPatternInPhp\StrategyPattern\Problem;

class King extends Character
{
    public function attack()
    {
        echo 'Attack by Chaos Sword' . PHP_EOL;
    }
}

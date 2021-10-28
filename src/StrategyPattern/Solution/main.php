<?php

use Lkp\DesignPatternInPhp\StrategyPattern\Solution\AttackByBloodSword;
use Lkp\DesignPatternInPhp\StrategyPattern\Solution\AttackByChaosSword;
use Lkp\DesignPatternInPhp\StrategyPattern\Solution\AttackBySword;
use Lkp\DesignPatternInPhp\StrategyPattern\Solution\King;
use Lkp\DesignPatternInPhp\StrategyPattern\Solution\Prince;

require_once '../../../vendor/autoload.php';

$king = new King(new AttackByChaosSword());
$prince = new Prince(new AttackBySword());

$king->attack();
$prince->attack();

echo 'Change weapon'.PHP_EOL;

$king->changeAttackStrategy(new AttackByBloodSword());
$prince->changeAttackStrategy(new AttackByChaosSword());

$king->attack();
$prince->attack();

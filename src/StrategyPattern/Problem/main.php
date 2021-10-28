<?php

namespace Lkp\DesignPatternInPhp\StrategyPattern\Problem;

require_once './../../../vendor/autoload.php';

$king = new King();
$prince = new Prince();

$king->attack();
$prince->attack();

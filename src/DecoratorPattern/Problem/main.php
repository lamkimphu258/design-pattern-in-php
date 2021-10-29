<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Problem;

require_once './../../../vendor/autoload.php';

$ramABC16Gb = new Ram('ABC 16GB', 9.9);
$ramABC8Gb = new Ram('ABC 8GB', 5.9);

$fanABCRGB = new Fan('ABC RGB', 7.9);
$fanABSsRGB = new Fan('ABS sRGB', 8.9);

$gamingPc = new GamingPC();
$gamingPc->addFan($fanABCRGB);
$gamingPc->addRam($ramABC8Gb);
echo $gamingPc;

$workFromHomePc = new WorkFromHomePC();
$workFromHomePc->addRam($ramABC16Gb);
$workFromHomePc->addFan($fanABSsRGB);
echo $workFromHomePc;

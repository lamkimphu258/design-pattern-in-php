<?php

namespace Lkp\DesignPatternInPhp\DecoratorPattern\Solution;

require_once './../../../vendor/autoload.php';

$gamingPcAddTwoRamAndTwoFan = new RamABC8Gb(new RamABC16Gb(new FanRGB(new FansRGB(new GamingPC()))));
echo $gamingPcAddTwoRamAndTwoFan;

$gamingPcAddFourFan = new FanRGB(new FanRGB(new FanRGB(new FanRGB(new GamingPC()))));
echo $gamingPcAddFourFan;

$workFromHomePcAddFanAndRam = new FanRGB(new RamABC8Gb(new WorkFromHomePC()));
echo $workFromHomePcAddFanAndRam;

$workFromHomePcAddThreeRam = new WifiDriver(new RamABC8Gb(new RamABC8Gb(new RamABC8Gb(new WorkFromHomePC()))));
echo $workFromHomePcAddThreeRam;

$studentPc = new StudentPC();
echo $studentPc;

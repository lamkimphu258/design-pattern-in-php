<?php

namespace Lkp\DesignPatternInPhp\ObserverPattern\Solution;

interface Publisher
{
    public function registerObserver(Observer $observer);

    public function unregisterObserver(Observer $observer);

    public function notify($eventData);
}

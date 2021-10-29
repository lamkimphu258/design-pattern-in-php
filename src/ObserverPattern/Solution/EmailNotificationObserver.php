<?php

namespace Lkp\DesignPatternInPhp\ObserverPattern\Solution;

class EmailNotificationObserver implements Observer
{
    public function __construct(
        private User $user
    ) {
    }

    public function update($post)
    {
        echo 'Hi '.$this->user->getName().'. We have just published new post: '.$post->getName().PHP_EOL;
    }
}

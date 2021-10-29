<?php

namespace Lkp\DesignPatternInPhp\ObserverPattern\Solution;

class Post
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}

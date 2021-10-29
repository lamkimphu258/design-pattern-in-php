<?php

namespace Lkp\DesignPatternInPhp\ObserverPattern\Solution;

class PostPublisher implements Publisher
{
    private array $posts = [];

    private array $observers = [];

    public function registerObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function unregisterObserver(Observer $observer)
    {
        array_splice($this->observers, array_search($observer, $this->observers), 1);
    }

    public function publishPost(Post $post)
    {
        array_push($this->posts, $post);
        $this->notify($post);
    }

    public function notify($post)
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->update($post);
        }
    }
}

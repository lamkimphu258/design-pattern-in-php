<?php

namespace Lkp\DesignPatternInPhp\ObserverPattern\Solution;

require_once './../../../vendor/autoload.php';

$postPublisher = new PostPublisher();
$johnDoe = new User('John Doe');
$janeDoe = new User('Jane Doe');
$emailNotification1 = new EmailNotificationObserver($johnDoe);
$emailNotification2 = new EmailNotificationObserver($janeDoe);

$postPublisher->registerObserver($emailNotification1);
$postPublisher->registerObserver($emailNotification2);

$postPublisher->publishPost(new Post('PHP variable'));

$postPublisher->unregisterObserver($emailNotification2);
$postPublisher->publishPost(new Post('PHP function'));

# Solution

Using Observer Pattern can solve our problem. So what is Observer Pattern.

According to Wikipedia, The observer pattern is a software design pattern in which an object, named the subject,
maintains a list of its dependents, called observers, and notifies them automatically of any state changes, usually by
calling one of their methods.

First, we need to have two interfaces Publisher and Observer so that we can program to interface, not implementations.
Our interface Publisher will have method to register observer, unregister observer and notify all observers when some
events occur. Interface Observer will have a method update to do something when event which is subscribed by observer
occur.

Secondly, we need to have to implement concrete Publisher and concrete Observer. In our case, concrete Publisher
is `PostPublisher` and concrete Observer is `EmailNotificationObserver`.

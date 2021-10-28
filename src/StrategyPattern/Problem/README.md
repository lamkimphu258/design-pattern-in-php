# Problem

Definitely, let subclass implements `attack` method can give difference characters have difference ways to attack.
However, how to give character ability to change their weapon? If we just simple implement `attack` method in
Character's subclasses, then when character change weapon (say that King change from Chaos Sword to Blood Sword), we
need to go inside that class and change the method. For that reason, our code violate Open-Closed Principle. And this is
not good.

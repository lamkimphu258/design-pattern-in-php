# Solution

Decorator Pattern, I summon you as my special monster in my code to solve my problem.

According to Wikipedia, the decorator pattern is a design pattern that allows behavior to be added to an individual
object, dynamically, without affecting the behavior of other objects from the same class.

So the solution is attach PC class into Hardware class and make Hardware class extends PC class. With this way, when add
new hardware, we can continue to wrap it with another hardware.

Now, we can add as many ram as we want by wrap hardware with current PC. If it has a new kind of hardware, just add new
class for that kind of hardware. And now, class like StudentPc don't need to extend method that it does not need.

Huray, now Phu and his uncle just need to take care of money, a lot of money.

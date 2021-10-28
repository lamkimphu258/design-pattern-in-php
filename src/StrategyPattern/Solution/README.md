# Solution

With that problem, using Strategy Pattern will help us solve it. So what is Strategy Pattern?

According to Wikipedia, the strategy pattern (also known as the policy pattern) is a behavioral software design pattern
that enables selecting an algorithm at runtime. Instead of implementing a single algorithm directly, code receives
run-time instructions as to which in a family of algorithms to use.

So what is our family of algorithms, in this case our family of algorithms is difference ways to attack. So we can
have `attack by sword`, `attack by stick`, `attack by chaos sword`, .... Moreover, we can change the way character
attack in runtime instead of going to code and change. Then let see how to implement Strategy Pattern in our case.

By creating interface AttackStrategy, we can implement that interface in difference classes like `AttackByBloodSword`
, `AttackByChaosSword`,.... After that, we attach that interface into our Character abstract class as property. Now we
provide method to change attack strategy and method to call method attack of class which implement `AttackStrategy`
interface. Then, depend on which attack strategy we use, our instance will attack with that attack strategy. Moreover,
we can change attack strategy in runtime. In the end, we now can both have differences weapons for differences
characters and each character can change to difference weapons in runtime.

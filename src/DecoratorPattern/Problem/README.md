# Problem

How can achieve this? Ah, the simplest way is creating many class like GamingPCWith8GbRam, GamingPCWith4GbRam,
GamingPCWith16GbRam, .... Wait wait wait, is this class explosion? What about gamming PC with more ram more hard drive,
more graphic card, more fan,...? The name of that class maybe GamingPCWith8GbRamWith160GbSSDWithRTXVga. Yakk, ugly.

Ahh, the solution is really simple. We can add method to set more ram, set more hard drive in our PC class. Time to
code. For simple, we just have option to add more ram and fan currently.

After an hour coding, Phu finished his project. Let's look at the code to see how Phu did it. Now his uncle can start a
business. Easy, right?

One day, it is a rainy day with black sky and thunder. Thor is comming, just kidding. One customer go inside the store
and ask to add three more ram, not just one. Also, he wants to add new hardware name wifi card. Finally, he asks if
store can provide new kind of PC, student PC. And he true, many students need a PC, so it will help the business grow.
Student PC is quite simple, CPU and RAM no need to add more. But ...

- How to add three more ram?
- If add new kind of hardware, then we need to go inside the code and change, it violates Open Closed Principle.
- Student PC still need to have method `addRam` and `addFan` even we never need to add anything into Student PC.

Phu definitely will have a nightmare tonight. Fortunately, he remembers Decorator Pattern. Ah, Decorator will save him.

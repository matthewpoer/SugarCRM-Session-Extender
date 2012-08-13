It Might Not Work
===============
Be aware that this is a so-far failed proof-of-concept. I don't know why it doesn't work, but it doesn't. A major issue I just found was a bad file refernce. It's a good reason to be broken, but there maybe other issues.

I've not abandoned hope nor this project, and would welcome any suggestions from others. 

SugarCRM-Session-Extender
=========================

An upgrade-safe/Module-Loader-able way to extend your SugarCRM Session Lengths without need to adjust PHP configuration

Requirements:
-------------
+ Your SugarCRM System must be 6.4.3 or greater, because that's when the after_entry_point logic hook is introduced
+ Your web host must allow the use of the PHP function [ini_set()](http://us.php.net/ini_set)
+ Should work on SugarCRM OnDemand cloud service

Licensing
---------
+ No guarantees or warranties of any kind. 
+ You can use it. It's free, open-source code. If you want someone to install it or support it for you, contact my company, [Profiling Solutions](http://http://www.profilingsolutions.com/about-psi/contact-us). 
+ This project isn't endorsed by or associated directly with [SugarCRM](http://www.sugarcrm.com), the company or the software platform.
+ I'm too lazy to research proper licensing blurbs and disclaimers, so just be nice. 

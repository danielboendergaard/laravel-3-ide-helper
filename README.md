Laravel 3 IDE Helper
===============

[![Build Status](https://travis-ci.org/danielboendergaard/laravel-3-ide-helper.svg?branch=master)](https://travis-ci.org/danielboendergaard/laravel-3-ide-helper)

Provides Laravel 3 auto-completion for Jetbrains PHPStorm

The purpose if this repository is to collaborate on keeping the helper file up to date, so please feel free to submit pull requests :)

Installation
------------

Copy ide_helper.php into your application folder

Alternative Installation
------------------------

This method is slightly more complicated, but you don't need to have the ide_helper.php in you project files.

Add the ide_helper.php file to the External Libraries:
- Create an ide_helper folder somewhere on your computer and drop the ide_helper.php file in
- In PHPStorm right click on External Libraries -> Configure PHP Include Paths...
- Click on the + icon and choose your previously created folder
- Click OK

Laravel 4
---------

For Laravel 4 I recommend using https://github.com/barryvdh/laravel-ide-helper which can generate the ide-helper file automatically.

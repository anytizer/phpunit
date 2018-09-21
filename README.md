# phpunit

Standalone PHPUnit toolkit.
It helps to setup a unified php environment on different developer machines. 

__Warning__: Do not use this test against your live environment because:

 * You may not own php.ini file
 * The server settings should be restricted, protected and unchanged.

It checks for:

 * [Composer](https://getcomposer.org/download/) installed
 * Basic [php.ini](http://php.net/manual/en/ini.list.php) configurations
 * Selected extensions
 * Selected classes

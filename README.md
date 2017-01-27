# PoC for error when assigning arrays with references to the PHP LUA extension

    $ cat /etc/issue
    Ubuntu 16.04.1 LTS \n \l

    $ php -v
    PHP 7.0.13-0ubuntu0.16.04.1 (cli) ( NTS )
    Copyright (c) 1997-2016 The PHP Group
    Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies
        with Zend OPcache v7.0.13-0ubuntu0.16.04.1, Copyright (c) 1999-2016, by Zend Technologies

    $ dpkg -s liblua5.2-dev | grep Version
    Version: 5.2.4-1ubuntu1

    $ php -i | grep '^lua '
    lua support => enabled
    lua extension version => 2.0.2
    lua release => Lua 5.2.4
    lua copyright => Lua 5.2.4  Copyright (C) 1994-2015 Lua.org, PUC-Rio
    lua authors => R. Ierusalimschy, L. H. de Figueiredo, W. Celes

    $ php test-assign.php
    Plain array:
    array(1) {
      ["a"]=>
      string(1) "b"
    }
    Referenced array:
    array(1) {
      ["a"]=>
      &string(1) "b"
    }
    Arrays are identical

    Assigning plain array...
    Plain array assigned.

    Assigning referenced array...
    PHP Fatal error:  Lua::assign(): unsupported type `string' for lua in /home/roel/git/php-lua-reference-error/test-assign.php on line 25

Esp&eacute;rance PHPUnit Extension
==================================

PHPUnit TestCase class integrated with [Esp&eacute;rance](https://github.com/esperance/esperance) assertion library.

Usage
-----

### Installation

Before installation of Esp&eacute;rance-PHPUnit, PHPUnit should be installed.

Esp&eacute;rance-PHPUnit can be installed using [Composer](http://getcomposer.org/).

At first, save below as `composer.json` at the root of your project.

```
{
    "require": {
        "esperance/esperance-phpunit": "0.1.*"
    }
}
```

And run these commands.

```
$ wget http://getcomposer.org/composer.phar
$ php composer.phar install
```

Then Esp&eacute;rance would be installed in `./vendor` directory and also `./vendor/autoload.php` is generated.

### Writing tests with Esp&eacute;rance assertion

Just replace `PHPUnit_Framework_TestCase` with `\Esperance\PHPUnit\Testcase`.

Then `$this->expect()` method is available to specify subject for the test.

```php
<?php
require './vendor/autoload.php';

class YourTestCase extends \Esperance\PHPUnit\TestCase
{
    public function testSomething()
    {
        $this->expect(1 + 1)->to->be(2);
        $this->expect("foo" . "bar")->to->be("foobar")->and->not->to->be('baz');
        $this->expect(new ArrayObject)->to->be->an('ArrayObject');
        $this->expect(function () {
            throw new RuntimeException;
        })->to->throw('RuntimeException');
    }
}
```

License
-------

The MIT License

Author
------

Yuya Takeyama

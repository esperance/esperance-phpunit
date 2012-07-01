Esp&eacute;rance-PHPUnit
========================

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
        "esperance/esperance-phpunit": "dev-master"
    }
}
```

And run these commands.

```
$ wget http://getcomposer.org/composer.phar
$ php composer.phar install
```

Then Esp&eacute;rance would be installed in `./vendor` directory and also `./vendor/autoload.php` is generated.

### PHPUnit integration

Just replace `PHPUnit_Framework_TestCase` with `\Esperance\PHPUnit\Testcase`.

Then `$this->expect()` method is available to specify subject for the test.

```php
<?php
class YourTestCase extends \Esperance\PHPUnit\TestCase
{
    public testSomething()
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

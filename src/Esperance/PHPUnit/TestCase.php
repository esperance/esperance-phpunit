<?php
namespace Esperance\PHPUnit;

use \Esperance\PHPUnit\Assertion;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function expect($obj)
    {
        return new Assertion($obj, NULL, $this);
    }
}

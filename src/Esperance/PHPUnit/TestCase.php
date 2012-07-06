<?php
namespace Esperance\PHPUnit;

use \Esperance\Assertion;
use \Esperance\Extension;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function expect($subject)
    {
        $extension = new Extension;
        $self = $this;
        $extension->beforeAssertion(function () use ($self) {
            $self->addToAssertionCount(1);
        });
        return new Assertion($subject, $extension);
    }
}

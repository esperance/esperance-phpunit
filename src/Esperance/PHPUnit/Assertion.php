<?php
namespace Esperance\PHPUnit;

class Assertion extends \Esperance\Assertion
{
    private $phpunitTest;

    public function __construct($subject, $flags = NULL, $test = NULL)
    {
        $this->phpunitTest = $test;
        parent::__construct($subject, $flags);
    }

    public function assert($truth, $message, $error)
    {
        $this->phpunitTest->addToAssertionCount(1);
        return parent::assert($truth, $message, $error);
    }
}

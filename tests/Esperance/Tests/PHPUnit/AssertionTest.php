<?php
namespace Esperance\Tests\PHPUnit;

use \Esperance\PHPUnit\Assertion;

class AssertionTest extends \Esperance\PHPUnit\TestCase
{
    /**
     * @test
     */
    public function assertion_object_created_by_and_DSL_should_be_PHPUnit_Assertion_instance()
    {
        $assertion = new Assertion(1);
        $this->expect($assertion->and)->to->be->an('Esperance\PHPUnit\Assertion');
    }
}

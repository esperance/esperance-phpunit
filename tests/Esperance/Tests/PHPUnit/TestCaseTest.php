<?php
namespace Esperance\Tests\PHPUnit;

use \Esperance\PHPUnit\Assertion;

class TestCaseTest extends \Esperance\PHPUnit\TestCase
{
    /**
     * @test
     */
    public function assertion_should_increment_PHPUnit_assertion_count()
    {
        $currentAssertions = $this->getNumAssertions();
        $this->expect(1)->to->be(1); // Perform an assertion.
        $this->expect($this->getNumAssertions())->to->be($currentAssertions + 1);
    }
}

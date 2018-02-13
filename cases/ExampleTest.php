<?php
namespace cases;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	public function testExampleMath()
	{
		$a = 5;
		$b = 8;
		$c = $a + $b;

		$this->assertEquals(13, $c);
	}
}
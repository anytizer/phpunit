<?php
namespace cases;

use PHPUnit\Framework\TestCase;

class PHPVersionCompareTest extends TestCase
{
	/**
	 * Download the latest software stack
	 */
	public function testVersionRequirements()
	{
		$has_required_version = version_compare(PHP_VERSION, "7.2.9") >= 0;
		$this->assertTrue($has_required_version, "Old PHP Version detected.");
	}
}

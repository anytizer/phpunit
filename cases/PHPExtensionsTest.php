<?php
namespace cases;

use PHPUnit\Framework\TestCase;

class PHPExtensionsTest extends TestCase
{
	public function testSplAutoloadRegister()
	{
		$this->assertTrue(function_exists("spl_autoload_register"));
	}

	public function testGdInfo()
	{
		$this->assertTrue(function_exists("gd_info"));
	}
}
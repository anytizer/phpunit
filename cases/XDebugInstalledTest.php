<?php
namespace cases;

use PHPUnit\Framework\TestCase;

class XDebugInstalledTest extends TestCase
{
	/**
	 * Install XDebug
	 * @see https://xdebug.org/download.php
	 *
	 * [xDebug]
	 * zend_extension="php_xdebug-*.dll"
	 */
	public function testVersionRequirements()
	{
		$xdebug_installed = function_exists("xdebug_disable");
		$this->assertTrue($xdebug_installed, "XDebug not found.");
	}
}

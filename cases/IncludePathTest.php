<?php
namespace cases;

use PHPUnit\Framework\TestCase;

class IncludePathTest extends TestCase
{
	public function testComposerIncludedGlobally()
	{
		$paths = explode(PATH_SEPARATOR, ini_get("include_path"));
		$contains_composer = false;
		foreach($paths as $path)
		{
			$contains_composer = preg_match("/[\\|\/]?Composer[\\|\/]?$/is", $path) >= 1;
			if($contains_composer)
			{
				break;
			}
		}

		$this->assertTrue($contains_composer, "Composer not found.");
	}
}
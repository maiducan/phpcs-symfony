<?php

class Kutny_Sniffs_Classes_DefaultValuesInConstructorSniffTest extends \Kutny_TestCase
{

	public function testRule()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/DefaultValuesInConstructorSniffTest/BasicClass.php');
		$errors = $phpcsFile->getErrors();
		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Default values for members must be set in the constructor.',
			$errors[6][15][0]['message']
		);
	}

}
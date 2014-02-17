<?php

class Kutny_Sniffs_WhiteSpace_OperatorSpacingSniffTest extends Kutny_TestCase
{

	public function testRule()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/OperatorSpacingSniff.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(2, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Space after minus as a negative value is prohibited',
			$errors[15][16][0]['message']
		);

		$this->assertEquals(
			'Expected 1 space after "-"; 0 found',
			$errors[16][13][0]['message']
		);

	}

}

<?php

class Kutny_Sniffs_ControlStructures_ForeachValueReferenceSniffTest extends \Kutny_TestCase
{

	public function testRule()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/ForeachValueReferenceSniff.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Passing value as reference in foreach scope is prohibited.',
			$errors[7][15][0]['message']
		);
	}

}
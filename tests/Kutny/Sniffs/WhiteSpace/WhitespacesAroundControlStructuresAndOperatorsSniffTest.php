<?php

class Kutny_Sniffs_WhiteSpace_WhitespacesAroundControlStructuresAndOperatorsSniffTest
	extends \Kutny_TestCase
{

	public function testRule()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/WhitespacesAroundControlStructuresAndOperatorsSniff.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(6, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'There must be one space on the right side of "if".',
			$errors[42][1][0]['message']
		);

		$this->assertEquals(
			'There must be one space on both sides of "===".',
			$errors[42][6][0]['message']
		);

		$this->assertEquals(
			'There must be one space on both sides of "else".',
			$errors[44][2][0]['message']
		);

		$this->assertEquals(
			'There must be one space on the right side of "foreach".',
			$errors[48][1][0]['message']
		);

		$this->assertEquals(
			'There must be no space on the right side of "array".',
			$errors[52][1][0]['message']
		);

		$this->assertEquals(
			'There must be one space on the right side of "switch".',
			$errors[56][1][0]['message']
		);
	}

}

<?php

class Kutny_Sniffs_ControlStructures_StrictComparisonOperatorsSniffTest extends \Kutny_TestCase
{

	public function testRule()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/StrictComparisonOperator.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(2, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Non-strict comparison operator == used without any "intentionally" comment on the same or previous line.',
			$errors[11][3][0]['message']
		);

		$this->assertEquals(
			'Non-strict comparison operator != used without any "intentionally" comment on the same or previous line.',
			$errors[13][3][0]['message']
		);
	}

}

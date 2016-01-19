<?php

class Kutny_Sniffs_Classes_ExceptionNamesSniffTest extends \Kutny_TestCase
{

	public function testRule()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/ExceptionNamesSniffTest/exceptions.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Exception class names must end with "Exception".',
			$errors[8][1][0]['message']
		);
	}

}
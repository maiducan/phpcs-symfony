<?php

class Kutny_Sniffs_Files_NoNewlineAtEndOfFileSniffTest extends Kutny_TestCase {

	public function testNewline() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NoNewlineAtEndOfFileSniffTest/newline.php');

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

	public function testNewlineScript() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NoNewlineAtEndOfFileSniffTest/newline-script.php');
		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

	public function testNoNewline()	{
		$phpcsFile = $this->checkFile(__DIR__ . '/NoNewlineAtEndOfFileSniffTest/nonewline.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());
		$this->assertEquals(
			"Missing plain newline at end of file nonewline.php.",
			$errors[6][1][0]['message']
		);
	}

	public function testMultipleNewlines() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NoNewlineAtEndOfFileSniffTest/multiplenewlines.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());
		$this->assertEquals(
			"Only simple newline allowed after file closing bracket in multiplenewlines.php.",
			$errors[7][1][0]['message']
		);
	}

}
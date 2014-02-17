<?php

/**
 * Forbides consecutive newlines.
 */
class Kutny_Sniffs_WhiteSpace_ConsecutiveNewlinesSniffTest extends Kutny_TestCase {

	public function testConsecutiveNewLinesUsed() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/consecutive-new-lines.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Two or more consecutive newlines are forbidden.',
			$errors[5][1][0]['message']
		);
	}

}

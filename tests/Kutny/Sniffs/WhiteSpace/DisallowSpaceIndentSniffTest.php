<?php
/**
 * Throws errors if spaces are used for indentation.
 *
 */
class Kutny_Sniffs_WhiteSpace_DisallowSpaceIndentSniffTest extends Kutny_TestCase {

	public function testSpacesIndentationUsed() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/space-indentation-used.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Tabs must be used to indent lines; spaces are not allowed',
			$errors[3][1][0]['message']
		);
	}

}

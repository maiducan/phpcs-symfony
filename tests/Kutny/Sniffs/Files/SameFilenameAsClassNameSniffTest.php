<?php

class Kutny_Sniffs_Files_SameFilenameAsClassNameSniffTest extends Kutny_TestCase {

	public function testRule() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/WrongFilename.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(
			"Class name 'FooBar' and file name 'WrongFilename.php' do not match.",
			$errors[3][1][0]['message']
		);
	}

}
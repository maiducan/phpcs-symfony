<?php

class Kutny_Sniffs_WhiteSpace_NewlinesBetweenClassPartsSniffTest extends Kutny_TestCase {

	public function testEmptyClass() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NewlinesBetweenClassPartsSniffTest/EmptyClass.php');

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

	public function testClassWithContantsAndMembers() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NewlinesBetweenClassPartsSniffTest/ClassWithContantsAndMembers.php');

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

	public function testClassWithConstantsOnlyAndWithEmptyLineMissing() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NewlinesBetweenClassPartsSniffTest/ClassWithConstantsOnlyAndWithEmptyLineMissing.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(2, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'There must be NO empty lines between constant declarations.',
			$errors[7][1][0]['message']
		);

		$this->assertEquals(
			'Line after last constant must be empty.',
			$errors[9][2][0]['message']
		);
	}

	/**
	 * This is invalid syntax according to our coding standards, but this sniff should report 0 errors
	 */
	public function testClassWithConstantsOnlySpecialCaseWithMultipleDeclaration() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NewlinesBetweenClassPartsSniffTest/ClassWithConstantsOnlySpecialCaseWithMultipleDeclaration.php');

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

	public function testConstantsBeforeClassMembers() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NewlinesBetweenClassPartsSniffTest/ConstantsBeforeClassMembers.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'All constants must be before class members.',
			$errors[7][2][0]['message']
		);
	}

	public function testWhitespacesBetweenMethods() {
		$phpcsFile = $this->checkFile(__DIR__ . '/NewlinesBetweenClassPartsSniffTest/WhitespacesBetweenMethods.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Line after function close parenthesis must be empty.',
			$errors[14][45][0]['message']
		);
	}

}

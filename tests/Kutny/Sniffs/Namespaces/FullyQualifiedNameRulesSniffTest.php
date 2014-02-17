<?php

class Kutny_Sniffs_Namespaces_FullyQualifiedNameRulesSniffTest extends \Kutny_TestCase {

	public function testStandardSituation() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/FullyQualifiedNameRulesSniff/StandardSituations.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(8, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Fully qualified class name must NOT be used even in PHPDocs comments',
			$errors[5][2][0]['message']
		);

		$this->assertEquals(
			'Fully qualified class name must NOT be used',
			$errors[8][30][0]['message']
		);

		$this->assertEquals(
			'Fully qualified class name must NOT be used',
			$errors[13][3][0]['message']
		);

		$this->assertEquals(
			'Fully qualified class name must NOT be used',
			$errors[15][20][0]['message']
		);

		$this->assertEquals(
			'Fully qualified class name must NOT be used',
			$errors[18][13][0]['message']
		);

		$this->assertEquals(
			'Fully qualified class name must NOT be used even in PHPDocs comments',
			$errors[22][1][0]['message']
		);

		$this->assertEquals(
			'Fully qualified class name must NOT be used even in PHPDocs comments',
			$errors[23][1][0]['message']
		);

		$this->assertEquals(
			'Fully qualified class name must NOT be used even in PHPDocs comments',
			$errors[26][3][0]['message']
		);
	}

	public function testPartialUses() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/FullyQualifiedNameRulesSniff/PartialUses.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Partial use statements are NOT allowed',
			$errors[11][33][0]['message']
		);
	}

	public function testMultipleClassesWithSameName() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/FullyQualifiedNameRulesSniff/MultipleClassesWithSameName.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Fully qualified class name must NOT be used',
			$errors[22][30][0]['message']
		);
	}

	public function testExceptionExtendsException() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/FullyQualifiedNameRulesSniff/ExceptionExtendsException.php');

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

}

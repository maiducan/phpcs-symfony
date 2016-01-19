<?php

class Kutny_Sniffs_Namespaces_UnusedUseClausesSniffTest extends \Kutny_TestCase {

	public function testUseNotUsedInClass() {
		$phpcsFile = $this->checkFile(
			__DIR__ . '/UnusedUseClausesSniff/UseNotUsedInClass.php'
		);
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Identifier Foo\Bar\SomeClass from use clause is not used in this file.',
			$errors[3][1][0]['message']
		);
	}

	public function testClassesInPhpDocs() {
		$phpcsFile = $this->checkFile(
			__DIR__ . '/UnusedUseClausesSniff/ClassesInPhpDocs.php'
		);

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

	public function testMethodAnnotations() {
		$phpcsFile = $this->checkFile(
			__DIR__ . '/UnusedUseClausesSniff/MethodAnnotations.php'
		);

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

	public function testClassDefinitions() {
		$phpcsFile = $this->checkFile(
			__DIR__ . '/UnusedUseClausesSniff/ClassDefinitions.php'
		);

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

}

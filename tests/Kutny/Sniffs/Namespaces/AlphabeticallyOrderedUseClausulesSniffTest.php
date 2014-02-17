<?php

class Kutny_Sniffs_Namespaces_AlphabeticallyOrderedUseClausulesSniffTest extends \Kutny_TestCase {

	public function testUnorderedUses() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/AlphabeticallyOrderedUseClausulesSniff/UnorderedUses.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Use clausules must be alphabetically ordered.',
			$errors[6][1][0]['message']
		);
	}

	public function testOrderedUses() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/AlphabeticallyOrderedUseClausulesSniff/OrderedUses.php');

		$this->assertEquals(0, $phpcsFile->getErrorCount());
	}

}

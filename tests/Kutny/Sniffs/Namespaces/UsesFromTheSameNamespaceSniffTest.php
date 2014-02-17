<?php

class Kutny_Sniffs_Namespaces_UsesFromTheSameNamespaceSniffTest extends \Kutny_TestCase
{

	public function testRules()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/UsesFromTheSameNamespaceSniff.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(2, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Use clausule with class from the same namespace is prohibited.',
			$errors[11][1][0]['message']
		);
		$this->assertEquals(
			'Use clausule with class from the same namespace is prohibited.',
			$errors[12][1][0]['message']
		);
	}

}

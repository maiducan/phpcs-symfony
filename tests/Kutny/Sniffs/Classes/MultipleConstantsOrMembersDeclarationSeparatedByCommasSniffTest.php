<?php

class Kutny_Sniffs_Classes_MultipleConstantsOrMembersDeclarationSeparatedByCommasSniffTest
	extends \Kutny_TestCase
{

	public function testConstants()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/MultipleConstants.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(2, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Multiple constants definition separated by commas is prohibited.',
			$errors[6][25][0]['message']
		);

		$this->assertEquals(
			'Multiple constants definition separated by commas is prohibited.',
			$errors[12][14][0]['message']
		);
	}

	public function testMembers()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/MultipleMembers.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(1, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Multiple members definition separated by commas is prohibited.',
			$errors[6][26][0]['message']
		);
	}

}

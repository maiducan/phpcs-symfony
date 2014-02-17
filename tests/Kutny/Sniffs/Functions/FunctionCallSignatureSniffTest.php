<?php

class Kutny_Sniffs_Functions_FunctionCallSignatureSniffTest extends Kutny_TestCase {

	public function testRule() {
		$phpcsFile = $this->checkFile(__DIR__ . '/data/FunctionCallSignatureSniff.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(
			'Space after opening parenthesis of function call prohibited',
			$errors[4][1][0]['message']
		);

		$this->assertEquals(
			'Space before opening parenthesis of function call prohibited',
			$errors[5][1][0]['message']
		);

		$this->assertEquals(
			'Space after closing parenthesis of function call prohibited',
			$errors[6][6][0]['message']
		);

		$this->assertEquals(
			'Space before closing parenthesis of function call prohibited',
			$errors[7][17][0]['message']
		);

		$this->assertEquals(
			'Space after opening parenthesis of function call prohibited',
			$errors[8][1][0]['message']
		);

		$this->assertEquals(
			'Space after comma between function parameters is required',
			$errors[9][1][0]['message']
		);

		$this->assertEquals(
			'Multiple spaces after comma between function parameters are prohibited',
			$errors[10][1][0]['message']
		);

		$this->assertEquals(
			'Space before comma between function parameters is prohibited',
			$errors[11][1][0]['message']
		);

		$this->assertEquals(
			'Space after opening parenthesis of method call prohibited',
			$errors[14][7][0]['message']
		);

		$this->assertEquals(
			'Space before opening parenthesis of method call prohibited',
			$errors[15][7][0]['message']
		);

		$this->assertEquals(
			'Space after closing parenthesis of method call prohibited',
			$errors[16][12][0]['message']
		);

		$this->assertEquals(
			'Space before closing parenthesis of method call prohibited',
			$errors[17][23][0]['message']
		);

		$this->assertEquals(
			'Space after opening parenthesis of method call prohibited',
			$errors[18][7][0]['message']
		);

		$this->assertEquals(
			'Space after comma between method parameters is required',
			$errors[19][7][0]['message']
		);

		$this->assertEquals(
			'Multiple spaces after comma between method parameters are prohibited',
			$errors[20][7][0]['message']
		);

		$this->assertEquals(
			'Space before comma between method parameters is prohibited',
			$errors[21][7][0]['message']
		);

		$this->assertEquals(
			'Empty lines are not allowed in multi-line function calls',
			$errors[27][1][0]['message']
		);

		$this->assertEquals(
			'Multi-line method call not indented correctly; expected 1 tabs but found 2',
			$errors[32][1][0]['message']
		);

		$this->assertEquals(
			'Space after opening parenthesis of constructor call prohibited',
			$errors[37][5][0]['message']
		);

		$this->assertEquals(
			'Space before opening parenthesis of constructor call prohibited',
			$errors[38][5][0]['message']
		);

		$this->assertEquals(
			'Space after closing parenthesis of constructor call prohibited',
			$errors[39][10][0]['message']
		);

		$this->assertEquals(
			'Space before closing parenthesis of constructor call prohibited',
			$errors[40][21][0]['message']
		);

		$this->assertEquals(
			'Space after opening parenthesis of constructor call prohibited',
			$errors[41][5][0]['message']
		);

		$this->assertEquals(
			'Space after comma between constructor parameters is required',
			$errors[42][5][0]['message']
		);

		$this->assertEquals(
			'Multiple spaces after comma between constructor parameters are prohibited',
			$errors[43][5][0]['message']
		);

		$this->assertEquals(
			'Space before comma between constructor parameters is prohibited',
			$errors[44][5][0]['message']
		);
	}

}
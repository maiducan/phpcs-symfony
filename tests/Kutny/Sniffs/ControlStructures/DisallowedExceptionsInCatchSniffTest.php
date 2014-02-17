<?php

class Kutny_Sniffs_ControlStructures_DisallowedExceptionsInCatchSniffTest extends \Kutny_TestCase
{

	public function testRule()
	{
		$phpcsFile = $this->checkFile(__DIR__ . '/data/DisallowedExceptionsInCatchSniff.php');
		$errors = $phpcsFile->getErrors();

		$this->assertEquals(5, $phpcsFile->getErrorCount());

		$this->assertEquals(
			'Catching "\Exception" is prohibited. You can suppress this with @SuppressWarnings(CS.DisallowedExceptionsInCatch) annotation above function or class.',
			$errors[11][3][0]['message']
		);

		$this->assertEquals(
			'Catching "\InvalidArgumentException" is prohibited. You can suppress this with @SuppressWarnings(CS.DisallowedExceptionsInCatch) annotation above function or class.',
			$errors[17][3][0]['message']
		);

		$this->assertEquals(
			'Catching "\Kutny\Exception\InvalidStateException" is prohibited. You can suppress this with @SuppressWarnings(CS.DisallowedExceptionsInCatch) annotation above function or class.',
			$errors[23][3][0]['message']
		);

		$this->assertEquals(
			'Catching "\Kutny\Exception\InvalidStateException" is prohibited. You can suppress this with @SuppressWarnings(CS.DisallowedExceptionsInCatch) annotation above function or class.',
			$errors[34][5][0]['message']
		);

		$this->assertEquals(
			'"throw $e" while catching "\Kutny\Exception\InvalidStateException" is allowed only if it\'s the first interruption statement in catch block. You can suppress this with @SuppressWarnings(CS.DisallowedExceptionsInCatch) annotation above function or class.',
			$errors[58][3][0]['message']
		);
	}

}

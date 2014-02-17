<?php

require_once(__DIR__ . '/IncorrectSniffTestCaseNameException.php');

class Kutny_TestCase extends PHPUnit_Framework_TestCase {

	protected function checkFile($testedFilePath) {
		$phpcs = new PHP_CodeSniffer();

		$phpcs->process(array(), $this->getRulesetPath(), array($this->getSniffName()));

		return $phpcs->processFile($testedFilePath);
	}

	private function getRulesetPath() {
		return '../Standards/Kutny/ruleset-testing.xml';
	}

	private function getSniffName() {
		$basename = substr(get_class($this), 0, -9);
		$parts = explode('_', $basename);

		return $parts[0] . '.' . $parts[2] . '.' . $parts[3];
	}

}

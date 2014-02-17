<?php

class Kutny_Sniffs_Namespaces_AlphabeticallyOrderedUseClausulesSniff implements PHP_CodeSniffer_Sniff {

	private $useStatementClassFinder;

	public function __construct() {
		$this->useStatementClassFinder = Kutny_Lib_DependencyInjection_Container::getUseStatementClassFinderCached();
	}

    public function register() {
		return array(
			T_OPEN_TAG,
		);
    }

    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {
		$classesInUse = $this->useStatementClassFinder->findClasses($phpcsFile);

		$sortedClassNames = $classesInUse->getFullClassNames();
		sort($sortedClassNames, SORT_FLAG_CASE | SORT_STRING);

		foreach ($classesInUse->getClasses() as $index => $class) {
			if ($class->getFullClassName() !== $sortedClassNames[$index]) {
				$phpcsFile->addError('Use clausules must be alphabetically ordered.', $class->getUsePtr());
				break;
			}
		}
	}

}

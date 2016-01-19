<?php

class Pokus {

	/** @var \Foo\Bar\DependencyClass */
	private $dependencyClass;

	public function __construct(\Foo\Bar\DependencyClass $dependencyClass) {
		$this->dependencyClass = $dependencyClass;
	}

	public function run() {
		\Foo\Bar\DependencyClass2::ahoj();

		$something = new \MyHop();
		$somethingElse = new NoNamespaceHop();

		throw new \Foo\Hop\InvalidHopException();
	}

	/**
	 * @param \Foo\Bar\DependencyClass $dependencyClass
	 * @return \Foo\Bar\SomeCrate
	 */
	private function doSomethingPrivate($dependencyClass) {
		/** @var \Foo\Bar\DependencyClass $dependencyClass */
		$dependencyClass->doSomething();
	}

}

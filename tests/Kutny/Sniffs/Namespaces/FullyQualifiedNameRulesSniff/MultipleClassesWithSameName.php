<?php

namespace Kutny\Bundle\FrontBundle\Controller;

use Foo\Bar\SomeClass;
use Foo\Bar\SomeClass2;

class SomeController extends ClassInSameNamespace implements \Hello\World\SomeClass2 {

	/** @var SomeClass */
	private $objectOfSomeClass;

	/**
	 * @var SomeClass2
	 */
	private $someOtherObject;

	public function __construct(\Hello\World\SomeClass $objectOfSomeClass) {
		$this->objectOfSomeClass = $objectOfSomeClass;
	}

	public function doSomething(\Hello\World\SomeOtherClass $objectOfSomeOtherClass) {
		return new SomeClass();
	}

}

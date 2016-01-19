<?php

namespace Kutny\Bundle\FrontBundle\Controller;

use Foo\Ahoj;

class SomeController {

	private $objectOfSomeClass;

	public function __construct(Bar\SomeClass $objectOfSomeClass) {
		$this->objectOfSomeClass = $objectOfSomeClass;
	}

}

<?php

namespace Kutny\Bundle\FrontBundle\Controller;

use Foo\Bar\SomeBaseClass;
use Foo\Bar\SomeClass;
use Foo\Bar\SomeException;

class SomeController extends SomeBaseClass {

	private function returnSomeClass(SomeClass $objectOfSomeClass) {
		throw new SomeException();
	}

}

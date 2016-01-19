<?php

namespace Kutny\Bundle\FrontBundle\Controller;

use Foo\Bar\SomeClass;
use Foo\Bar\ArrayOfSomeClass;
use Foo\Bar\SomeReturnedClass;
use Foo\Bar\SomeParamClass;

class SomeController {

	/** @var SomeClass */
	private $arrayObject;

	/** @var ArrayOfSomeClass[] */
	private $arrayOfSomeClass;

	/**
	 * @param SomeParamClass $objectOfSomeParamClass
	 * @return SomeReturnedClass
	 */
	private function returnSomeClass($objectOfSomeParamClass) {
	}

}

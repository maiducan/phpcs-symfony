<?php

class SomeNotIgnoredClass
{

	public function __construct()
	{

	}

}

namespace Nette;

class Object
{

}

// wrong

namespace Kutny;

class TestClass
{

	public function __construct()
	{

	}

}

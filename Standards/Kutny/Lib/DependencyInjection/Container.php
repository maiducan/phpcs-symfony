<?php

class Kutny_Lib_DependencyInjection_Container {

	private static $services = array();

	/**
	 * @return Kutny_Lib_AllClassFinder
	 */
	public static function getAllClassFinder() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_AllClassFinder(
					self::getPhpDocsClassFinderCached(),
					self::getClassFinderCached()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassFinder
	 */
	public static function getClassFinder() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassFinder(
					self::getClassNameParser(),
					self::getClassFinder_ImplementsParser(),
					self::getClassFinder_StaticCallsParser(),
					self::getClassFinder_TypeHintingParser(),
					self::getClassFinder_SimpleParser()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassFinderCached
	 */
	public static function getClassFinderCached() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassFinderCached(
					self::getClassFinder()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassFinder_ImplementsParser
	 */
	public static function getClassFinder_ImplementsParser() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassFinder_ImplementsParser(
					self::getClassNameComposerForward()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassFinder_SimpleParser
	 */
	public static function getClassFinder_SimpleParser() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassFinder_SimpleParser(
					self::getClassNameComposerForward()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassFinder_StaticCallsParser
	 */
	public static function getClassFinder_StaticCallsParser() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassFinder_StaticCallsParser(
					self::getClassNameComposerBackward()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassFinder_TypeHintingParser
	 */
	public static function getClassFinder_TypeHintingParser() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassFinder_TypeHintingParser(
					self::getClassNameComposerForward()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassInPhpDocsFinder
	 */
	public static function getClassInPhpDocsFinder() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassInPhpDocsFinder();
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassNameComposerBackward
	 */
	public static function getClassNameComposerBackward() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassNameComposerBackward();
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassNameComposerForward
	 */
	public static function getClassNameComposerForward() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassNameComposerForward();
			}
		);
	}

	/**
	 * @return Kutny_Lib_ClassNameParser
	 */
	public static function getClassNameParser() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_ClassNameParser();
			}
		);
	}

	/**
	 * @return Kutny_Lib_Namespace_SeparatorDetector
	 */
	public static function getNamespaceSeparatorDetector() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_Namespace_SeparatorDetector();
			}
		);
	}

	/**
	 * @return Kutny_Lib_PhpDocsClassFinder
	 */
	public static function getPhpDocsClassFinder() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_PhpDocsClassFinder(
					self::getClassNameParser(),
					self::getClassInPhpDocsFinder()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_PhpDocsClassFinderCached
	 */
	public static function getPhpDocsClassFinderCached() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_PhpDocsClassFinderCached(
					self::getPhpDocsClassFinder()
				);
			}
		);
	}

	/**
	 * @return Kutny_Lib_UseStatementClassFinder
	 */
	public static function getUseStatementClassFinder() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_UseStatementClassFinder();
			}
		);
	}

	/**
	 * @return Kutny_Lib_UseStatementClassFinderCached
	 */
	public static function getUseStatementClassFinderCached() {
		return self::getService(
			__FUNCTION__,
			function() {
				return new Kutny_Lib_UseStatementClassFinderCached(
					self::getUseStatementClassFinder()
				);
			}
		);
	}

	private static function getService($name, Closure $createInstanceCallback) {
		if (!array_key_exists($name, self::$services)) {
			self::$services[$name] = $createInstanceCallback();
		}

		return self::$services[$name];
	}

}

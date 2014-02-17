<?php

class Kutny_Lib_ClassInPhpDocsFinder  {

	public function find($phpDocsLine) {
		if (preg_match('~@(?:param|return|var)\s+([\w\\\\]+\\\\)?([\w]+)~', $phpDocsLine, $matches)) {
			$namespace = !empty($matches[1]) ? $matches[1] : null;
			$className = $matches[2];

			return new Kutny_Lib_ClassDefinition($className, $namespace);
		}
		else {
			return null;
		}
	}

}

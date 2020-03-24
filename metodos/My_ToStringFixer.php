<?php

set_error_handler(array('My_ToStringFixer', 'errorHandler'));
error_reporting(E_ALL | E_STRICT);

class My_ToStringFixer {
	protected static $_toStringException;

	public static function errorHandler($errorNumber, $errorMessage, $errorFile, $errorLine) {
		if (isset(self::$_toStringException)) {
			$exception = self::$_toStringException;
			//Always unset '_toStringException', we don´t want a straggler to be found later if smoething came betweeen the setting and the error
			self::$_toStringException = null;
			if (preg_match('~^Method .*::__toString\(\) must return a string value$~', $errorMessage)) {
				throw $exception;
			}

			return false;
		}
	}

	public static function throwToStringExecption($exception) {
		// should not occur with prescribed usage, but in case of recursion: clean out exception, return a valid string, and weep

		if (isset(self::$_toStringException)) {
			self::$_toStringException = null;
			return '';
		}

		self::$_toStringException = $exception;

		return null;
	}
}

class My_class {

	public function doComplexStuff() {

		throw new Exception("Oh noes!", 1);

	}

	public function __toString() {

		try {
			// do your complex thing which might trigger an exception
			return $this->doComplexStuff();
		} catch (Exception $e) {

			//The return is required to trigger the trick
			return
			My_ToStringFixer::throwToStringExecption($e);
		}
	}
}

$x = new My_class();

try {

	echo $x;

} catch (Exception $e) {

	echo "Caught Exception! : " . $e;
}

?>

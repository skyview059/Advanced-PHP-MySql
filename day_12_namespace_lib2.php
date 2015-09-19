<?php
// application library 2
namespace App\Lib2;

const MYCONST = 'App\Lib2\MYCONST';

function MyFunction() {
	return __FUNCTION__;
}

class MyClass {
	static function WhoAmI() {
		return __METHOD__;
	}
}
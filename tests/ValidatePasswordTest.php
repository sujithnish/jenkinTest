<?php

require_once __DIR__ . '/../vendor/autoload.php';

use JenkinTest\ValidatePassword;

class ValidatePasswordTest extends PHPUnit_framework_TestCase{

	public function testValidateLength(){
		$valPass = new ValidatePassword();
		$this->assertFalse($valPass->validLength('1234'));
	}

}
<?php

require 'C:/xampp/htdocs/others/jenkinTest/src/ValidatePassword.php';

class ValidatePasswordTest extends PHPUnit_framework_TestCase{

	public function testValidateLength(){
		$valPass = new ValidatePassword();
		$this->assertFalse($valPass->validLength('1234'));
	}

}
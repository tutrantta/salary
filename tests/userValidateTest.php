<?php 
require_once '/../helpers/validation.php';

class UserValidateTest extends PHPUnit_Framework_TestCase 
{
    protected $preserveGlobalState = FALSE;
    protected $runTestInSeparateProcess = TRUE;

	function setUp()
	{
		$this->validation = new Validation;
	}

	function tearDown()
	{

	}

	function testValidateLoginInputShouldReturnFalseWhenUsernameEqualsABC()
	{
		//Given
		$username = 'abc';
		$password = 'abcd';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordEqualsBCD()
	{
		//Given
		$username = 'abcde';
		$password = 'bcd';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenUsernameLengthLongerThan30() {
		//Given
		$username = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
		$password = 'abcde';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordLengthLongerThan30() {
		//Given
		$username = 'abcde';
		$password = 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenUsernameIsNull() {
		//Given
		$username = null;
		$password = 'bbbbbb';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordIsNull() {
		//Given
		$username = 'fsjlkfj';
		$password = null;

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenUsernameIsNumber() {
		//Given
		$username = 1232;
		$password = 'bbbbbb';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordIsNumber() {
		//Given
		$username = 'abababab';
		$password = 12;

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}	

	function testValidateLoginInputShouldReturnTrueWhenUsernameAndPasswordAreValid() {
		//Given
		$username = 'hieu';
		$password = 'hieu';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertTrue($actual);
	}
}
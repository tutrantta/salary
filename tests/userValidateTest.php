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
		$password = 'goodPassword';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordEqualsBCD()
	{
		//Given
		$username = 'goodUsername';
		$password = 'bcd';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenUsernameLengthLongerThan30() {
		//Given
		$username = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
		$password = 'goodPassword';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordLengthLongerThan30() {
		//Given
		$username = 'goodUsername';
		$password = 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenUsernameIsNull() {
		//Given
		$username = null;
		$password = 'goodPassword';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordIsNull() {
		//Given
		$username = 'goodUsername';
		$password = null;

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenUsernameIsNumber() {
		//Given
		$username = 1232;
		$password = 'goodPassword';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}

	function testValidateLoginInputShouldReturnFalseWhenPasswordIsNumber() {
		//Given
		$username = 'goodUsername';
		$password = 12;

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}	

	function testValidateLoginInputShouldReturnFalseWhenUsernameContainsWhiteSpace() {
		//Given
		$username = 'abab abab';
		$password = 'goodPassword';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertFalse($actual);
	}	

	function testValidateLoginInputShouldReturnTrueWhenUsernameAndPasswordAreValid() {
		//Given
		$username = 'goodUsername';
		$password = 'goodPassword';

		//When
		$actual = $this->validation->validateLoginInput($username, $password);

		//Then
		$this->assertTrue($actual);
	}
}
<?php


class MathTest extends PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
		$answer = Math::add(3,5);
		$this->assertEquals(8, $answer);
	}

	public function testMultiply1()
	{
		$answer = Math::multiply(2,7);
		$this->assertEquals(14, $answer);
	}

	public function testMultiply2()
	{
		$answer = Math::multiply(3,7);
		$this->assertEquals(21, $answer);
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testMultiplyInvalidInput()
	{
		$answer = Math::multiply('stuff', 4);
		
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testMultiplyInvalidInput2()
	{
		$answer = Math::multiply(4, 'kyoss');
		
	}


	public function testInstanceOfMathClass()
	{
		$math = new Math;
		$this->assertInstanceOf('Math', $math);
	}

}
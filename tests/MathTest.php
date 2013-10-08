<?php


class MathTest extends PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
		$answer = Math::add(3,5);
		$this->assertEquals(8, $answer);
	}

}
<?php


use PHPUnit\Framework\TestCase;
use CodeCamp\SampleClass;

class SampleClassTest extends TestCase
{

	public function testGetHelloWorld()
	{
		$this->assertEquals("hello world", (new SampleClass())->getHelloWorld() );
	}
}
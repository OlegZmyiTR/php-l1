<?php


use PHPUnit\Framework\TestCase;
use CodeCamp\alhorytms\SortedList;

class SortedListTest extends TestCase
{

	public function testGetHelloWorld()
	{
		$this->assertEquals("Hello World", (new SortedList())->getHelloWorld() );
	}
}
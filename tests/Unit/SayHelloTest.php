<?php 
use HelloWorld\SayHello;
class SayHelloTest extends PHPUnit_Framework_TestCase
{
    public static function testMustBeEqual()
    {
		$a = new \SayHello;
		$this->assertEquals('Hello World, Composer!',$a->world());
    }
}
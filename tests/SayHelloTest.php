<?php 

class SayHelloTest extends PHPUnit_Framework_TestCase
{
    public static function mustBeEqual()
    {
		$a = new SayHello();
		return $this->assertEquals('Hello World, Composer!',$a->world());
    }
}
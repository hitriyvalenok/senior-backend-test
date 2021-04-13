<?php
namespace JohnK\tests;

use JohnK\VerySimpleClass;
use PHPUnit\Framework\TestCase;

class VerySimpleClassTest extends TestCase
{
    public function testNameSetterAndGetterWorks()
    {
        $name = 'John';
        $instance = new VerySimpleClass;
        $instance->setName( $name );
        $this->assertEquals( $name, $instance->getName() );
    }
}
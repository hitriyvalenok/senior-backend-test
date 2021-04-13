<?php
namespace JohnK;

class VerySimpleClass extends VerySimpleAbstractClass implements VerySimpleClassI
{
    protected ?string $name = null;

    function setName( string $name ): void
    {
        $this->name = $name;
    }
}
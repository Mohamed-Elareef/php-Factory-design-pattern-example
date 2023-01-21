<?php

class Dog
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function speak()
    {
        return "Woof!";
    }
}


?>

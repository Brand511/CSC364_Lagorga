<?php

class MyClass
{

    public $prop1 = "Im a class property!";

    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    public function getProperty()
    {
        return $this->prop1 . "<br />";
    }
}

$obj = new MyClass;

echo $obj->prop1;

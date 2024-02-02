<?php

class MyClass 
{
    public $name = "John";

    public function greet() 
    {
        echo "Hello {$this->name}!";
    }
}

$obj = new MyClass();
// echo $obj->name . ;

$obj->greet();




?>
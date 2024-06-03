<?php
class des{
    public $name;

    function __construct($name)
    {
        $this->name=$name;
    }
    function getname(){
        return $this->name;
    }
    function __destruct()
    {
        echo "My name is : ".$this->name;
    }
}
$apple = new des('kiran');
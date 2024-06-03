<?php
abstract class vechicle{
    abstract function getname();
}
class bikes extends vechicle{
    public $name;
    function __construct($name)
    {
        $this->name = $name;    
    }
    function getname(){
        echo "My favourite bike is : " . $this->name;
    }
}
$RTR = new bikes('RTR-310');
echo $RTR->getname();
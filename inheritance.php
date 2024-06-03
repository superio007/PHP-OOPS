<?php
class Food{
    public $name;
    public $type;

    function __construct($name,$type)
    {
        $this->name=$name;
        $this->type=$type;
    }
    function speak(){
        echo "\n this is protectd";
    }
    
}
class StrretFood extends Food{
    function __destruct()
    {
        echo "My favourite food is : " . $this->name .' and it is so spicy : '. $this->type;
    }
    function speak()
    {
        echo "override";
    }
    
}
$misal = new StrretFood('misalPaav','hot');
$misal->speak();
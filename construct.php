<?php
class Fruit{
   public $name;
    
   function __construct($name)
   {
        $this->name = $name;
   }
   
   function getname(){
        return $this->name;
   }
}
$apple = new Fruit('kiran');
echo $apple->getname();
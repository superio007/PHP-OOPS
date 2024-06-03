<?php
class fruits{
    public $name;
    private $color;

    function setcolor($color){
        $this->color = $color;
    }
    function getcolor(){
        return $this->color;
    }
}
$apple = new fruits();
$banana = new fruits();


$apple->name = ('Apple');
$banana->name = ('Banana');

$apple->setcolor('red');
echo $apple->getcolor();


// echo $apple->name;
// echo $banana->name;
?>
<?php
trait class1{
    function message(){
        echo "class1";
    }
}
trait class2{
    function message1(){
        echo "class2";
    }
}
class claas3{
    use class1 ,class2;
}
$class3 = new claas3();
$class3->message();
$class3->message1();
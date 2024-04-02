<?php
class cars{
    var $carname;
    var $color;

    function setname($carname){
        $this->carname = $carname;
    }
    function getname(){
        return $this->carname;
    }
    function setcolor($color){
        $this->color=$color;
    }
    function getcolor(){
        return $this->color;
    }

}
$Beamer=new cars();
$volvo =new cars();

$Beamer->setname("BMW");
$Beamer->setcolor("Black");

$volvo->setname("Volovo");
$volvo->setcolor("Grey");

echo $Beamer->getname();



?>
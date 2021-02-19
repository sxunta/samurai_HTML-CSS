<?php
class Car
{
    static $class_name = "Car";
    
    function init(){
        $this->name ="";
    }
    public function show(){
        print($this->name."\n");
    }
}

$car = new car();
$car->name = "セダン";
$car->show();

print(car::$class_name);
?>
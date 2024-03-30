<?php
Interface Vehicle{
    public function accelerate();
    public function breack();
    public function talax();
}


class Car implements Vehicle{
    public function accelerate(){
        echo "Car start Moving<br>";
    }
    public function breack(){
        echo "Car stop<br>";
    }
    public function talax(){
        echo "pep pep ...<br>";
    }
}

Class Bycicle{
    public function pedal(){
        echo "Bike start moving<br>";
    }

    public function stop(){
        echo "Bike Stop<br>";
    }

    public function ring(){
        echo "Ring Ring ...<br>";
    }
}



// Start Adabater Class
class BycicleAdapter implements Vehicle{
    private $bike; //object from class Bike
    function __construct($bike){
        $this->bike = $bike;
    }
    public function accelerate(){
       $this->bike->pedal();
    }
    public function breack(){
        $this->bike->stop();
    }
    public function talax(){
        $this->bike->ring();
    }
}
// end Adabater Class



$bike = new BycicleAdapter(new Bycicle);
$bike->accelerate();
$bike->talax();
$bike->breack();



// $car = new Car();
// $car->breack();
// $car->accelerate();
// $car->talax();
// $car = new Car();
// $car->talax();
// $car->accelerate();
// $car->breack();


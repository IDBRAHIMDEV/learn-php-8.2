<?php
class Car {
    
    //Attributes properties
    public $name;
    public $horse;
    protected $acceleration;
    public $motor = "Normal";
   
    function __construct($name, $horse, $acceleration) {
        $this->name = $name;
        $this->horse = $horse;
        $this->acceleration = $acceleration;
    }

    public function __destruct()
    {
        echo "$this->name Removed";
    }

    public function __clone()
    {
        echo $this->name .= " (cloned)";
    }

    //Methods
    public function accelerate() {
        $this->acceleration++;
    }


    //getters 
    public function getAcceleration() {
        return $this->acceleration;
    }

    //setters
    public function setAcceleration($speed) {
        if(filter_var($speed, FILTER_VALIDATE_INT) && $speed >= 0) {

            $this->acceleration = $speed;
        }
    }

    public function message() {
        return "the car name is : $this->name, speed : $this->acceleration";
    }
}


class Suv extends Car {
    
    private $offRoad;
    public $motor = "Hybrid";

    public function __construct($name, $horse, $acceleration, $offRoad)
    {
        $this->offRoad = $offRoad;
        parent::__construct($name, $horse, $acceleration);
    }

    public function getOffRoad() {
        return $this->offRoad;
    }

    public function setOffRoad($offRoad) {
        $this->offRoad = $offRoad;
    }

    public function message() {
        return "the SUV name is : $this->name, the type of the motor is : $this->motor, speed : $this->acceleration";
    }
}

$quattro = new Suv('Audi Q8', 600, 0, true);
//echo "Suv " . $quattro->acceleration . "<br />";

$quattro->setAcceleration(100);
$quattro->accelerate();
echo $quattro->message() . "<br />";
//echo $quattro->getAcceleration();

// print_r(get_class_vars('Car'));
// print_r(get_class_methods('Car'));

$carOne = new Car("Audi", 230, 0);
echo $carOne->motor . "<br />";
echo $carOne->message() . "<br />";

$carThree = clone $carOne;
echo $carThree->name;

$carTwo = new Car("Ferrari", 780, 0);
echo $carTwo->motor . "<br />";
echo $carTwo->message() . "<br />";

// unset($carOne);
// unset($carTwo);
// unset($quattro);

// $carTwo->accelerate();

// echo $carTwo->name . '<br />';
// echo $carTwo->horse . '<br />';
// echo $carTwo->getAcceleration() . '<br />';

// $carTwo->setAcceleration(-1);

// echo $carTwo->getAcceleration() . '<br />';


?>
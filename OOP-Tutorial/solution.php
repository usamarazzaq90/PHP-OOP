<!DOCTYPE html>
<html>
<body>

<?php
	class Car{
    	public $color;
        public $manufacturer;
        function __construct($color="unknown",$manufacturer="unknown"){
        	$this->color=$color;
            $this->manufacturer=$manufacturer;
            //echo "Into the constructor <br>";
        }
        
        function displayInfo(){
            echo ("The manufacturer of car is: $this->manufacturer <br>");
        	echo ("The color of car is: $this->color <br>");
        }
    }
    
    class saloonCar extends Car{
    	public $numberOfSeats;
        function __construct($numberOfSeats=null, $manufacturer="unknown", $color="unknown"){
        	parent::__construct($color,$manufacturer);   //Calling the parent constructor
            //Manually initializing the members again
            //$this->color=$color;
            //$this->manufacturer=$manufacturer;
        	$this->numberOfSeats=$numberOfSeats;
        }
        function displayInfo(){
        	echo "<br>";
            echo ("The number of seats in car is: $this->numberOfSeats <br>");
            parent::displayInfo();
        	//echo ("The manufacturer of car is: $this->manufacturer <br>");
            //echo ("The color of car is: $this->color <br>");
        }
    }
    
    $myCar=new Car("Red","Toyota");
    $myCar->displayInfo();
    
    $saloonCar1=new saloonCar(2);
    $saloonCar1->displayInfo();
    
    $saloonCar2=new saloonCar(3,"Nissan");
    $saloonCar2->displayInfo();

    $saloonCar3=new saloonCar(4,"Ford","Purple");
    $saloonCar3->displayInfo();
?>

</body>
</html>

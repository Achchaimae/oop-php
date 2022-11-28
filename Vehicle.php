<?php
class Vehicle{
 //attribute
    public $make;
    public $model;
    public $color;
    public $noOfWheels;
    public $engineNumber;
    
    //methods
    //setter
    // setter declaration
    function set_VehiculeInfos($make,$model,$color,$noOfWheels,$engineNumber){
        $this->make=$make;
        $this->model=$model;
        $this->color=$color;
        $this->noOfWheels=$noOfWheels;
        $this->engineNumber=$engineNumber;
    }
    // start another type of set declaration
            // function setMake($make){
            //     $this->make=$make;
            // }

    // end another type of set declaration
    // getter
    public function getMake(){
        return $this->make;
    }

    public function getModel(){
        return $this->model;
    } 

    public function getColor(){
        return $this->color;
    } 

    public function getNoOfWheels(){
        return $this->noOfWheels;
    } 

    public function getEngineNumber(){
        return $this->engineNumber;
    } 
    // construct is for post a value by default
        //construct without parametre 
    // public function __construct(){
    //     $this->make='maserati';
    // }
        // construct with parametre
    public function __construct($make)
    {
        $this->make=$make;
    }



    
}
//declaration
$maserati = new Vehicle('achchaimae');
// $maserati->set_VehiculeInfos('maserati','quattroporte','black',20,'test');
// echo $maserati->getModel();
// echo "<br>";
// echo $maserati->getColor();
// 

echo $maserati->make;


?>

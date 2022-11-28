<?php
//abstract is class u can only inherite from it ,but u can create an object from it
abstract class Animal{
public $name;
public $age;
public $food_type;
// construct is method to initialize objects .It can be used to set initial values for object attributes .
public function __construct($name,$age,$food_type){
    $this->name=$name;
    $this->age=$age;
    $this->food_type=$food_type;
}
public function run(){

return "running";
}
public function sleep() {

    return "sleeping";
}
private function die() {

    return "death";
}
// abstract fct is deffined by the child class (the class necessery to be an abstract class )
abstract public function sound();
}


class Cat extends Animal{
    public $toy;
    public function __construct($name,$age,$food_type,$toy){
        $this->toy=$toy;
        //this one return parametre to parents
        parent::__construct($name,$age,$food_type);

    }
    public function sound()
    {
        return"meow";
    }
    public function scrach()
    {
        return true;
    }


}
class Dog extends Animal{

   public function sound(){
    return "bark";
   }

  }

$dog = new Dog("Dog","17","carnivore");
 echo $dog->age;

?>
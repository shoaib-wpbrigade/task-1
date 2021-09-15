<?php
class car{
public $color;
public $name;
public $model;
public function __construct($name="BMW", $model="UK", $color="white")
{
	$this->name= $name;
	$this->model= $model;
	$this->color= $color;

}
public function car(){

	return "car name is $this->name and model is $this->model and color is $this->color <br>";
}

}


$ali = new car("Honda", "Civic","red");
echo $ali->car();


$rizwan = new car("Toyota", "Corolla","Black");
echo $rizwan->car();

$shoaib = new car();
echo $shoaib->car();

$koibhi= new car;
echo $koibhi->car();



?>

<?php
class car{
public $color;
public $name;
public $model;
//constructor also have default parameters if the value is not given while initializing te object it will take default values
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


//this is practice for the type casting
$x=10.954; //float
$height= (string)$x; //float to string

$height= $height." feet"; //joining two strings
echo $height;

//constant
define('myname', 'Shoaib');
echo "<br> ". myname."<br>";

//                                operators
$int= 8;

$y=$int++;// post increament

echo $int. " after increament<br>";
echo $y. " post increament <br>";//8

//                           switch statements
$favcar= "Audi";
switch($favcar){
case "honda":
	echo "your favorite car is honda";
	break;
case "Audi":
	echo "Your favorite car is Audi";
	break;
default:
	echo "I dont know your favorite car";


}
?>

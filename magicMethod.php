<?php
class Person{
    // private $coloring;
    public $name;
    public function __construct($n){
        $this->name=$n;
        echo  "Hello".$n."</br>";
    }
    // public function __call($method, $args){
    //     echo $method." is Not Found";
    //     print_r($args);

    // }
    // public function __get($name){
    //     echo $name." Not Found";
    // }
    // public function __set($name, $value) {
    //     echo $name." the method is not found or accessible and values are ".$value; 
    // }
}
// class Std extends Person{
    
// }
$person=new Person("Ali");
//person2 not affceted by person
$person2= clone $person;
$person->name="Sara";
$person2->name="Ahmed";
print_r($person);
print_r($person2);
// $person->sayHello("sara","waleed");
// $person->coloring="red";
// echo $person->coloring;
// $std=new Std("Sara");
?>
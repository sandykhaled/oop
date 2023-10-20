<?php
class Phone{
    public static $name="Ali";
    public $ram="2G";
    // use static method instead of creating object from class
    public static function sayHello(){
        // Can't use $this becuse there is no object to reference to
        // echo $this->name;

    }
}
$phone1=new Phone();
// echo $phone1->name; //Can't access static property by object 
echo $phone1->sayHello(); // But Static Method can be accessed by object
echo Phone::sayHello();
echo Phone::$name;





?>
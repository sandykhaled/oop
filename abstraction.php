<?php
//can't be instantined [can't create object from]
//Can have Methods & Properties
//can have abstract Method & Non Abstract Method
//Abstract Mathod Mustn't have body

abstract class Apple{
    public $ram;
    public $space;
    public $inch;
    public function SayHello(){
      
    }
    abstract public function welcome ($name);
    

}
class Device extends Apple{
 public function welcome($name) {
    return 'welcome'.$name;
 }
}
$apple=new Device();
echo $apple->welcome('ali');
?>
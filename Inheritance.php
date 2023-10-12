<?php
final class AppleDevice{
    public $ram="1G";
    public $space="16 GB";
    public $inch="4 Inch";
    public $color="Silver";
    public $name;
    public function changeSpace($ram,$space,$inch,$col){
        $this->ram=$ram;
        $this->space=$space;
        $this->inch=$inch;
        $this->color=$col;
    }
    final public function sayHello($n){
        $this->name=$n;
        echo "Say Hello to ".$n;
    }
}
class Soni extends AppleDevice{   
    public $camera='25MB';
    public function changeSpaces($ram,$space,$inch,$col,$cam){
        $this->ram=$ram;
        $this->space=$space;
        $this->inch=$inch;
        $this->color=$col;
        $this->camera=$cam;
    }
    // public function sayHello($n){
    //     $this->name=$n;
    //     echo "Say Hello to ".$n."this phone has ".$this->ram."ram";
    // }

}
$soni=new Soni();
$soni->changeSpaces('12 G','16 G','3 Inch','Gold','64 MB');
echo $soni->sayHello('Soni');
$soni->price="200$";
echo "<pre>";
var_dump($soni);
echo "</pre>";
$device=new AppleDevice();
echo $device->sayHello('Apple');
echo "<pre>";
var_dump($device);
echo "</pre>";






?>
<?php
interface Phone{
    public function press_here();
    //Method Without Body
    
}
class Iphone implements Phone{
    public $name;
    public function press_here(){
      return "All App is closed";
    }
}
class Soni implements Phone{
    public $name;
    public function press_here()
   {
    return "All App is opened";
   }
}
$phone=new Iphone();
echo $phone->press_here();
$soni=new Soni();
echo $soni->press_here();



?>
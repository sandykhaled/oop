<?php
class Phone{
    // var $phone;
   public $ram = '8 G ram';
   public $inch ='3 inch';
   public $space ='64 GB';
   private $lock;
//    public $ownerName;
//    public function getPrice($price){
//     return $price;
//    }
//    public function getSpace(){
//     return "Space in App equals to".$this->space;
//    }
//    public function getOwnerName(){
//     if(strlen($this->ownerName)<3){
//         return "the name should be more than 3 charcters";
//     }
//     else{
//         return "The name is Ok!";
//     }
//    }
// //    public function setOwnerName($name){
// //     if(strlen($name)<3){
// //         return "the name should be more than 3 charcters";
// //     }
// //     else{
// //         return "The name is Ok!";
// //     }
// //    }
//    //Constants
//    const NAME="Taher";
//    public function setOwnerName($name){
//     $this->ownerName=$name;
//     if(strlen($this->ownerName)<strlen(self::NAME)){
//         return "the name should be more than 3 charcters";
//     }
//     else{
//         return "The name is Ok!";
//     }
//    }
   public function changeSpace($ram,$inch,$space){
    $this->ram=$ram;
    $this->inch=$inch;
    $this->space=$space;

   }
   public function changeLock($lo){
       $this->lock=sha1($lo); //Hash
   }
}
$phone1=new Phone();
$phone1->changeSpace("12 G","16 GB","24 T");
// echo $phone1->ram;
$phone1->changeLock('HHHH');
// echo $phone1->lock='FFF';
// $phone1->ram='16 G ram';
// $phone1->inch='5 inch';
// $phone1->space="32 GB";
// $phone1->color="Gold";
// $phone1->ownerName="li";
// echo $phone1->getPrice(1000);
// echo $phone1->getSpace();
// echo $phone1->getOwnerName();
// echo Phone::NAME;
// echo $phone1::NAME;
// echo "<br>";
// echo $phone1->setOwnerName('Ali');
echo '<pre>';
var_dump($phone1);
echo '</pre>';
// $phone2=new Phone();
// echo '<pre>';
// var_dump($phone2);
// echo '</pre>';

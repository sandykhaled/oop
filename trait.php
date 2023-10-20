<?php
//Can't be extended or implemented
//Can't creat object
trait FingerPrint{
    public function print(){
        echo "FingerPrint";
        return $this;
    }
}
trait FaceDetect{
    public function detect(){
       echo "face detect";
       return $this;
    }
}
trait Touch{
    public function Touch3D() {
        echo "touch 3D";
        return $this;
    }
}
trait AllFeatures{
    use Touch,FaceDetect,FingerPrint;
}
class Iphone{
    use AllFeatures;
   
}
//Note => Trait Has Priority Over inherited class 
$iphone=new Iphone();
//Method Chaining
echo $iphone->detect()->Touch3D()->print();




?>
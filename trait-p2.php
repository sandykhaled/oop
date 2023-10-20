<?php

trait MyFeature1{
    public function feature(){
        echo "feature from trait named MyFeature1";
    }
}
trait MyFeature2{
    public function feature(){
        echo "feature from trait named MyFeature2";
    }
}
class feature{
    use MyFeature1,MyFeature2{
        MyFeature1::feature as f1;
        MyFeature2::feature insteadof MyFeature1;
    }
}
$feature=new feature();
$feature->feature();
$feature->f1();








?>
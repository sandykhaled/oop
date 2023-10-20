<?php
class Person{
    public function SayHello(){
        echo "Say Hello";
        return $this;
    }
    public function GetByName()
    {
    echo "getbyname";
    return $this;
    }
    public function LastName(){
        echo "LastName";
        return $this;
    }
}    
$p=new Person();
$p->SayHello()->GetByName()->LastName();






?>
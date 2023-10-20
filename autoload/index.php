<?php
spl_autoload_register(function($class){
require 'testing/'.$class.'.php';
});
//name of class must be equal name of php file
$test=new testing();
// $test=new test();  //Error
$test->name;

?>
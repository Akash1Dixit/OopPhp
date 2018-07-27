<?php

     class User {

     	public static $minPassLength = 5;


     	 public static function validatePass($password){
     	 	if(strlen($password) >= self:: $minPassLength){
     	 		return true;
     	 	} else {
     	 		return false;
     	 	}
     	 }
     }

 $password = 'pass123';
 if(User:: validatePass($password)){
 	echo 'password is valid';
 } else {
 	echo 'passwordis is not valid';
 }

/*   spl_autoload_register(function($class_name){
   	  include $class_name.'.php';
   
   });  */
 ?>

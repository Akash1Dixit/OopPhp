<?php 

     class User {

     	public function __consturct(){

     	}

     	 public function register(){

     	 	  echo "USer Reg";
     	 }

     	 public function login($username,$password){
     	 	echo $username.' '.'logged in';
     	 }

     	 public function ___destruct(){
     	 	
     	 }
     }
  
  $User = new User;
 // $User ->register();
$User->login('Akash','123');
?>
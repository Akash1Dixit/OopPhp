<?php 
      class Post {

      	private $name;

      	public function __set($name,$value){
      		echo 'Setting'.$name.'to <strong>'.$value.'<br / >';
      		 $this->name = $value;

      	}  

      }

   $Post= new Post;
   $Post->name = 'Testing';
?>
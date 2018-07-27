<?php 
     class First {
     	public $id=23;
     	public $name= 'Akash';

     	public function saySomething(){
     		echo 'saySomething...';
     	}
     }

    class Second extends First {

    }

    $Second = new Second;

    echo $Second->saySomething();

?>
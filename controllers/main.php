<?php
require_once 'models/Name.php';


class main {
 
   public function index($param = ''){

            echo $param ."<br/>"."Default";
   }

   public function registration(){ // processing controller for registration
   	$data = $_GET["data"];
   	$colume = $_GET["colume"];
   	$table = $_GET["tab"];

   	$reg = new Name();
   	$reg ->insert_model($table, $colume, $data);
   }

   public function autorisation(){ // processing controller for autorisation
   	$mail = $_GET["mail"];
   	$pass = $_GET["pass"];
	   $table = $_GET["tab"];

	   $reg = new Name();
   	$reg -> select_model($table,  $mail, $pass);

   }

   public function delete(){



   }


}

?>
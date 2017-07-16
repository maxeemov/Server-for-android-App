<?php
require_once 'connection.php';

class Name {


    public function func(){
      echo 'NAME';
  }


//INSERT MODEL
  	public function insert_model($table_name='', $colume='', $data=''){ // regisration new data

  		$sql = 'INSERT INTO '. $table_name . ' ('. '`id`,' . $colume .')' . ' VALUES ' . '(' .'NULL,'. $data . ')'; 
      $con=new Connection();
      $con->query($sql);

  	}

//SELECT MODEL

  	public function select_model($table_name='', $mail='', $pass=''){ //get requested data

      $sql = 'SELECT * FROM ' . $table_name . ' WHERE ' . '`mail`='.$mail . ' &&' . '`pass`=' . $pass; 
      $con=new Connection();
      $result= $con->query($sql);

      while($reply = mysqli_fetch_assoc($result)){ //get returned data from DB
       $rows[] = $reply;

     }
      print json_encode($rows); //output

  	}

//UPDATA MODEL   

  	public function update($table_name='',$data=''){ 

          
  		
  	}
//DELETE MODEL
  	public function delet($table_name='',$data=''){
  		
  	}

}

?>
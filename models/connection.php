<?php

 
 class Connection{
 
 	public function query($query=''){
require_once 'models/conf.php';
$link = mysqli_connect($host, $user, $password, $database) //connection wthis database
	or die("Ошибка " . mysqli_error($link));

 
$result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); //guery in to database
	if($result){

		echo 'Successfully <br/>';
		return 	$result;	//return reply from database
    

	}
 
mysqli_close($link); 

}
}
?>

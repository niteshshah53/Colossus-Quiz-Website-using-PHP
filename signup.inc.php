<?php

session_start();

include 'database.php';

$name= $_POST['name'];
//$lastname= $_POST['lastname'];
$usn= $_POST['usn'];
//$pwd= $_POST['password'];
if(empty($name)){
	header("Location:signin.php?error=empty");
	exit();
}
/*if(empty($pwd)){
	header("Location:signin.php?error=empty");
	exit();
}if(empty($lastname)){
	header("Location:signin.php?error=empty");
	exit();
}*/if(empty($usn)){
	header("Location:signin.php?error=empty");
	exit();
}
else{
    $query="SELECT * FROM `signin` WHERE usn='$usn'";
   $results=$mysqli->query($query) or die($mysqli->error._LINE_);
//get row
    
   $row = $results->fetch_assoc();
    if($usn !=$row['usn']){
        $_SESSION['usn']=$_POST['usn'];
	//	$enc_pwd=password_hash($pwd,PASSWORD_DEFAULT);
		$sql = "INSERT INTO `signin`(usn,name)
		 VALUES ( '$usn','$name')";
		$results= $mysqli->query($sql) or die($mysqli->error.__LINE__);
        	header("Location:quiz1.php");
	
    }
    else
    {
       header("Location:signin.php?error=duplicate");
    }
     
    
}


		
		


?>

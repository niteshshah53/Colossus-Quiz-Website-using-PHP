<?php


session_start();
include 'database.php';
$usn= $_POST['usn'];
$pwd= $_POST['password'];
//decrypting starts
//$sql = "SELECT * FROM `signin` WHERE usn='$usn'";
//$result=$mysqli->query($sql);
//$row=$result->fetch_assoc();
//$hash_pwd=$row['password'];
//$hash=password_verify($pwd,$hash_pwd);
//if($hash==0){
//	header("Location:signin.php?error=wrongpwd");
//	exit();
//}
//else{



	//		$sql = "SELECT * FROM `signin` WHERE usn='$usn' AND password='$hash_pwd'";
	//		$result=$mysqli->query($sql);
	//		if(!$row=$result->fetch_assoc()){
	//			echo "Your password or user name is wrong";
	//		}
		//	else{

		//		$_SESSION['usn']= $row['usn'];
		//	}
		//	header("Location:quiz1.php");
			
//}
if($usn=123456 and $pwd==123456){
    header("Location:add.php");
}
else{
  header("Location:signin.php?error=wrongpwd");
	exit();  
}
?>
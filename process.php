<?php include 'database.php'?>
<?php 
    session_start();
?>
<?php
    if(!isset($_SESSION['score'])){
        $_SESSION['score']=0;
        $_SESSION['no']=0;
    }
if(isset($_POST['choice'])){
    $number= $_POST['number'];
    $selected_Choice=$_POST['choice'];
    $next=$number+1;
    $_SESSION['no']++;
}
else{
  // echo ' $number<h1>you have not selected any choices please go back and select on of the Choices!!!!</h1>';
 //echo "  <script>  alert('you have not selected');</script>";
 $number= $_POST['number'];
$next=$number;
 header("Location:question.php?n=".$next);
	//exit();
   
}
$query="SELECT * FROM `questions`";
$results=$mysqli->query($query) or die($mysqli->error._LINE_);
$total=$results->num_rows;
//make a query
$query="SELECT * FROM `choices` WHERE question_number=$number AND is_correct=1";
$results=$mysqli->query($query) or die($mysqli->error._LINE_);
//get row 
$row = $results->fetch_assoc();
$correct_choice = $row['id'];
if($correct_choice==$selected_Choice){
    if($number==$_SESSION['no'])
    $_SESSION['score']++;
}

//finalizing
if($total== $number){
    $sco=$_SESSION['score'];
    $usn_no=$_SESSION['usn'];
    $name=$SESSION['name'];
    $sql = "INSERT INTO `marks`(usn_no,mark)
         VALUES ( '$usn_no','$sco')";
        $results= $mysqli->query($sql) or die($mysqli->error.__LINE__);
    header("Location:final.php");
    exit();
     
    
}
else{
    header("Location:question.php?n=".$next);
    
}
?>

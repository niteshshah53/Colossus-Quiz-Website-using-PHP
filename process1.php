<?php include 'database.php'?>
<?php 
    session_start();
?>
<?php 
    //get question number
    $number = (int)$_GET['n'];
  /*  $query = "SELECT * FROM `questions` WHERE question_number=$number";
    $result=$mysqli->query($query) or die($mysqli->error._LINE_);
    $question = $result->fetch_assoc();
    //get the total
            $query="SELECT * FROM `questions`";
            $results=$mysqli->query($query) or die($mysqli->error._LINE_);
            $total=$results->num_rows;



    // get choices

     $query = "SELECT * FROM `choices` WHERE question_number=$number";
    $choices =$mysqli->query($query) or die($mysqli->error._LINE_);*/

$next=$question['question_number']+1+$next;
 header("Location:question.php?n=".$next+1);

 ?>
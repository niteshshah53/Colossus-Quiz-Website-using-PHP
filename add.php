<?php include 'database.php'?>
<?php 
    if(isset($_POST['submit'])){
        $question_number=$_POST['question_number'];
        $question_text=$_POST['question_text'];
        $correct_choice =$_POST['choice_number'];
        //create array
        $choices=array();
        $choices[1]=$_POST['choice1'];
        $choices[2]=$_POST['choice2'];
        $choices[3]=$_POST['choice3'];
        $choices[4]=$_POST['choice4'];
        //error handling CH
        if(empty($question_text)){
           //echo "Fill Every thing properly!!!";
            header("Location:add.php?error=empty");
        exit();
            }
             if(empty( $correct_choice )){
           //echo "eNTER THE COORECT CHOICE";
            header("Location:add.php?error=empty");
        exit();
            }
             if(empty($choices[1])){
           //echo "Fill CHOICE1 properly!!!";
            header("Location:add.php?error=empty");
        exit();
            }
             if(empty($choices[2])){
           //echo "Fill Every thing properly!!!";
            header("Location:add.php?error=empty");
        exit();
            }
             if(empty($choices[3])){
           //echo "Fill Every thing properly!!!";
            header("Location:add.php?error=empty");
        exit();
            }
               if(empty($choices[4])){
           //echo "Fill Every thing properly!!!";
            header("Location:add.php?error=empty");
        exit();
            }
            
                  //make a question query
         $query = "INSERT INTO `questions`(question_number,text) VALUES('$question_number',' $question_text')";
           $insert_row= $mysqli->query($query) or die($mysqli->error._LINE_);
        if($insert_row){
            foreach($choices as $choice=>$value){
                if($value!=''){
                    if($correct_choice==$choice){
                        $is_correct=1;
                    }else
                    {
                        $is_correct=0;
                    }
                    //make a query
                    $query = "INSERT INTO `choices`(question_number,is_correct,text) VALUES('$question_number','$is_correct','$value')";
                    //run query
                    $insert_row= $mysqli->query($query) or die($mysqli->error._LINE_);
                    if($insert_row){
                        continue;
                    }
                    else{
                        die('Error :('.$mysqli->errno.')'.$mysqli->error);
                    }
                }
                
            }
            $msg  ='question has been added succesfully';
        }
        
    }
    $query = "SELECT * FROM `questions`";
    $results= $mysqli->query($query) or die ($mysqli->error._LINE_);
    $total= $results->num_rows;
    $next= $total+1;
?>
           
           
<!Doctype html>
<html lang="en">
<head>
<title>My web site</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style1.css">
<style type="text/css">
label{
    display: inline-block;
    width: 180px;
}
input[type='text']{
    width: 97%;
    padding: 4px;
    border-radius: 5px;
    border: 1px #ccc solid;
}
input[type='number']{
    width: 40px;
    padding: 4px;
    border-radius: 5px;
    border: 1px #ccc solid;
}
    .submit{
        background-color: aquamarine;
        border-radius: 5px;
        -moz-border-radius: 5px;
         -webkit-border-radius: 5px;
        
    }
.mainheader img{
    width:100%;
    height: 60px;
}

</style>
<meta name="viewpor" content="width=device-width,initial-scale=1.0" >
</head>
<body class="body">
    <header class="mainheader">
        <img src="images/1.jpg" >
        <nav>
            <ul>
                <li ><a href="index.php" >Home</a></li>
                <li><a href="#">About</a></li>
                <li class="active"><a href="add.php">Add question</a></li>
                <li><a href="mark.php">Marks</a></li>
                <li><a href="signin.php">Sign IN</a></li>

            </ul>

        </nav>
    </header>
    <div class="maincontent">
        <div class="content">
            <article class="toparticle">
                <header>
                    <h2><a href="#" title="addquestion">ADD QUESTION</a></h2>

                </header>
                <footer class="post-info">
                    <p>This post is written by shirzad 2017/1/20</p>
                </footer>
                <content>
                <?php if(isset($msg)){ echo '<p>'.$msg.'</p>';
}?>
        <form method="post" action="add.php">
        <p>
            <label>Question number</label>
            <input type="number"  value="<?php echo $next;?>" name="question_number"/>
         </p>
             <p>
            <label>Question text</label>
            <input type="text" name="question_text"/>
         </p>
        <p>
            <label>choice #1</label>
            <input type="text" name="choice1"/>
         </p>
            <p>
            <label>choice #2</label>
            <input type="text" name="choice2"/>
         </p>
            <p>
            <label>choice #3</label>
            <input type="text" name="choice3"/>
         </p>
            <p>
            <label>choice #4</label>
            <input type="text" name="choice4"/>
         </p>
         
        <p>
            <label>correct choice number</label>
            <input type="number" name="choice_number"/>
         </p>
            <p>
            <input type="submit" name="submit"  class="submit" value="submit"/>
         </p>
        </form> 

                </content>

        </div>

    </div>
    <aside class="top-sidebar">
        <article>
        <h2>Top sidebar</h2>
        <p>Therefore the Qur'an is named The Criterion, 
                    the criterion between right and wrong, good and evil.</p>
        </article>
    </aside>
   
    <aside class="bottom-sidebar">
        <article>
        <h2>bottom sidebar</h2>
        <p>Therefore the Qur'an is named The Criterion, 
                    the criterion between right and wrong, good and evil.</p>
        </article>
    </aside>
    </aside>
    <aside class="middle-sidebar">
        <article>
        <h2>Middle sidebar</h2>
        <p>Therefore the Qur'an is named The Criterion, 
                    the criterion between right and wrong, good and evil.</p>
        </article>
    </aside>
    <footer class="mainFooter">
        <p>copyright@<a href="#" title="myweb.com">myweb.com</a></p>
    </footer>

</body>
</html>
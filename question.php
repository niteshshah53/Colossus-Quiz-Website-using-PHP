
<?php include 'database.php';?>

<?php session_start();?>
<?php 
    //get question number
    $number = (int)$_GET['n'];
    $query = "SELECT * FROM `questions` WHERE question_number=$number";
    $result=$mysqli->query($query) or die($mysqli->error._LINE_);
    $question = $result->fetch_assoc();
    //get the total
            $query="SELECT * FROM `questions`";
            $results=$mysqli->query($query) or die($mysqli->error._LINE_);
            $total=$results->num_rows;



    // get choices

     $query = "SELECT * FROM `choices` WHERE question_number=$number";
    $choices =$mysqli->query($query) or die($mysqli->error._LINE_);
//get th esystem time
$variable=date("i");
if($variable>57){
     $sco=$_SESSION['score'];
    $usn_no=$_SESSION['usn'];
    $name=$SESSION['name'];
    $sql = "INSERT INTO `marks`(usn_no,mark)
         VALUES ( '$usn_no','$sco')";
        $results= $mysqli->query($sql) or die($mysqli->error.__LINE__);
    header("Location:final.php");
    exit();
}
    
?>
<!Doctype html>
<html lang="en">
<head>
<title>My web site</title>
<meta charset="utf-8" http-equiv="refresh" content="5"/>
<link rel="stylesheet" type="text/css" href="style1.css">
<style type="text/css">
.choices label li{
	list-style: none;
}
    .submit{
        background-color: aquamarine;
        border-radius: 5px;
    }
.mainheader img{
    width:100%;
    height: 90px;
}
</style>
<meta name="viewpor" content="width=device-width,initial-scale=1.0" >
</head>
<body class="body">
	<header class="mainheader">
		<img src="images/brced.jpg" >
		<nav>
			<ul>
				<li class="active"><a href="index.php" >Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Quizer</a></li>
				<li><a href="#">Add question</a></li>
				<li><a href="#">Contact</a></li>
                <li><a href="#"><?php echo date("h:i:s A");?></a></li>
			</ul>

		</nav>
	</header>
	<div class="maincontent">
		<div class="content">
			<article class="toparticle">
				<header>
                    
					<h2><a href="#" title="firstpost"><div class="current">Question  <?php echo $question['question_number']?>  of  <?php echo $total?></div></a></h2>
                    <h5><a href="#" title="firstpost">Please choose one of the four answere!</a></h5>
					
                   <p class "question"><?php echo $question['text'];?> </p>

				</header>
				<footer class="post-info">
					<!--<p>This post is written by Mr Basavaraju  2017/1/20</p>-->
				</footer>
				<content>
				<form method="post" action="process.php">
            <ul class="choices">
                <?php while($row= $choices->fetch_assoc()):?>
               <label> <li><input  name="choice" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text'];?></li>
                <input type="hidden" name="number" value="<?php echo   $number;?>"</label>
                
                <?php endwhile ?>
              </ul>
            <input name="submit" class="submit" type="submit"/>
            
          
        
        
      <!--  </form>
                    <form method="post" action="process1.php"><input name="submit" class="submit"  value ="next"type="submit"/>
                        <input name="submit" class="submit"  value ="next" type="submit"/>
                        
                    </form>
-->
				</content>

			</article>
				
		</div>

	</div>
	<aside class="top-sidebar">
		<article>
		<h2>what is colossus</h2>
		<p>colossus was aet of computer developedby british codwbreaker, 
					in 1943-1945 to help in the cryptanalysisof lorintz cipher.</p>
		</article>
	</aside>
	<aside class="middle-sidebar">
		<article>
		<h2>who designed</h2>
	

	
	<p>colossus was designed by research telephone engineer Tommy Flowerto solve aproblem post by m athematician Max Newman 
   
		</article>
	</aside>
	
	<footer class="mainFooter">
		<p>copyright@<a href="#" title="myweb.com">myweb.com</a></p>
	</footer>

</body>
</html>

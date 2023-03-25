<?php include 'database.php'; ?>
<?php 
//get the number of the question 
$query= "SELECT * FROM `questions`";
$results= $mysqli->query($query) or die($mysqli->error._LINE_);
$total=$results->num_rows;

?>
<!Doctype>

<!Doctype html>
<html lang="en">
<head>
<title>colosus</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style1.css">
<style type="text/css">
.start{
	background-color: #FC5C3F;
	color: #FFF;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	padding: 1% 2%;
	
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
				<li><a href="#">Add Question</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Sign In</a></li>
				

			</ul>

		</nav>
	</header>
	<div class="maincontent">
		<div class="content">
			<article class="toparticle">
				<header>
					<h2><a href="#" title="test your php">COLOSSUS 2018 TEST</a></h2>

				</header>
				<footer class="post-info">
					<p></p>

				</footer>
				<content>
						<p>There is multiple choice question which can test you</p>
			        <ul>
			        <li><strong>Number of questions:  </strong><?php echo $total ;  ?></li>
			        <li><strong>type:  </strong>multiple choice</li>
			        <li><strong>time estimated:  </strong><?php echo $total*1.5 ;  ?> minute</li>
                                         
			        </ul>
			         <a href="question.php?n=1" class="start"> start</a>

				</content>

			</article>
				
 
		</div>

	</div>
	<aside class="top-sidebar">
		<article>
		<h2>what is colossus</h2>
		<p>colossus was aet of computer developedby british codwbreaker, 
					in 1943-1945 .</p>
		</article>
	</aside>
	<aside class="middle-sidebar">
	<article>
		<h2>who designed</h2>
		<p>colossus was designed by research telephone engineer Tommy Flowerto solve aproblem post by m athematician Max Newman .</p>
		</article>
	</aside>
		<footer class="mainFooter">
		<p>copyright@<a href="#" title="myweb.com">myweb.com</a></p>
	</footer>

</body>
</html>





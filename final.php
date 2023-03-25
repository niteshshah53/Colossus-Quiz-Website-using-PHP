<?php session_start();?>
<!Doctype html>
<html lang="en">
<head>
<title>My web site</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style1.css">
<style type="text/css">
.mainheader img{
	width:100%;
	height: 60px;
}
    .start{
        background-color: aqua;
        width: 100px;
        height: 40px;
        border: 1px solid black;
        border-radius: 5px;
       -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        
    }
   
    </style>
<meta name="viewpor" content="width=device-width,initial-scale=1.0" >
</head>
<body class="body">
	<header class="mainheader">
		<img src="images/brced.JPG" width="800px" height="50px">
		<nav>
			<ul>
				<li class="active"><a href="index.php" >Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="signin.php">Sign In</a></li>
				<li><a href="#">Add question</a></li>
				<li><a href="#">Contact</a></li>
                <li> <a href='logout.php'><input type='submit' name='submit'  class='submit' value='logout'/>

			</ul>

		</nav>
	</header>
	<div class="maincontent">
		<div class="content">
			<article class="toparticle">
				<header>
					<h2><a href="#" title="firstpost"><h2>you are done</h2></a></h2>
                    <h4><a href="#" title="firstpost"><h2>please click on the logout button</h2></a></h4>

				</header>
				<footer class="post-info">
				<!--	<p>This post is written by sayed 2017/1/20</p>-->
				</footer>
				<content>
				
			        <p>congrats you have completed the test</p>
			        <p>The USN number is :<?php echo $_SESSION['usn'];?></p>
			        <p>Final score is :<?php echo $_SESSION['score'];?></p>
			        <?php $_SESSION['score']=0;?>
			    <!--    <a href="question.php?n=1" class ="start">start again</a></>-->

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
	
	<footer class="mainFooter">
		<p>copyright@<a href="#" title="myweb.com">myweb.com</a></p>
	</footer>

</body>
</html>
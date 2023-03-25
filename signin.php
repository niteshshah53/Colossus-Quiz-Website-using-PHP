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
	height: 90px;
}
.text{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#submit{
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<meta name="viewpor" content="width=device-width,initial-scale=1.0" >
</head>
<body class="body">
	<header class="mainheader">
		<img src="images/brced.JPG" >
		<nav>
			<ul>
				<li ><a href="index.php" >Home</a></li>
                <li><a href="#">About</a></li>
            
               
                <li class ="active"><a href="signin.php">Sign IN</a></li>
  	<?php if(!isset($_SESSION['usn'])){
				echo "<form method='post' action='login.inc.php'>
			   <li><a href='#'> <input type='password' name='password' placeholder='Enter the password'/></a></li>
               <li><a href='#'> <input type='text' name='usn' placeholder='Enter the usn'/></a></li>
               <li> <a href='#'><input   type='submit' name='submit'  class='submit' value='Login'/></a></li>
            
            
        
     </form>";}  
     else{
    echo " <li> <a href='logout.php'><input type='submit' name='submit'  class='submit' value='logout'/>";
 }?>

			</ul>

		</nav>
	</header>
	<div class="maincontent">
		<div class="content">
			<article class="toparticle">
				<header>
					<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
						if(strpos($url, 'error=wrongpwd')){
							echo"<h2> Wrong Password or USN Number!!!!</h2>";
						}
                    if(strpos($url, 'error=duplicate')){
							echo"<h2>you have already complted your Test !!!!</h2>";
						}
						if(strpos($url, 'error=empty')){
							echo"<script
							  src='http://code.jquery.com/jquery-3.1.1.min.js'
							  integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8='
							  crossorigin='anonymous'></script>
									<script >    
								
										alert('Fill Every thing properly!!!! <br> Click ok to restart!!!!');

									</script>";
						}


					?>
					<h2><a href="#" title="firstpost">Registration Form for  DEBUGGING</a></h2>
                    <h5><a href="#" title="firstpost"> Instruction:Each question carrays one mark and no negative mark</a></h5>
				

				</header>
				<content>
				
			             <p>
			            <form method="post" action="signup.inc.php">
								    <label >First Name</label>
								    <input class="text" type="text" name="name" placeholder="Enter the Name"/>
								  <!--  <label >Last Name</label>
								    <input class="text" type="text" name="lastname" placeholder="Enter the last name"/>-->
								    <label >USN NO</label>
								    <input class="text" type="text" name="usn" placeholder="Enter the usn"/>
								    <!-- <label >password</label>
								    <input  class="text" type="password" name="password" placeholder="Enter the Password"/>-->
								      <input id ='submit' class="text" type="submit" name="submit"  class="submit" value="submit"/>
								         
			        </form> 
			        </p>
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
		<aside class="bottom-sidebar">
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
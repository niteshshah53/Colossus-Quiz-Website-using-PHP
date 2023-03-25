

           
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
    table{
        width:100%;
        border:1px solid green;
    }
th
{
height:50px;
background-color:green;
color:white;
}
td
{
width:33%;
    border-radius: 5px;
    border: 1px #ccc solid;
    background-color:powderblue;
}

</style>
<meta name="viewpor" content="width=device-width,initial-scale=1.0" >
</head>
<body class="body">
    <header class="mainheader">
        <img src="images/bg16.JPG" >
        <nav>
            <ul>
                <li ><a href="index.php" >Home</a></li>
                <li><a href="#">About</a></li>
                <li class="active"><a href="#">Marks</a></li>
                <li><a href="# class="active">Add question</a></li>
                <li><a href="#">Sign IN</a></li>

            </ul>

        </nav>
    </header>
    <div class="maincontent">
        <div class="content">
            <article class="toparticle">
                <header>
                    <h2><a href="#" title="Results">Results</a></h2>

                </header>
                <footer class="post-info">
                 
                </footer>
                <content>
                    <form action="pdf.php" method ="post">
                <?php 
                    $mysqli = NEW MYSQLI('localhost','root','','colosus');
                    $resultset = $mysqli->query("select a.name,a.usn,b.mark from signin a,marks b where a.usn=b.usn_no order by b.mark desc ");
                    if($resultset->num_rows != 0){
                         echo "<table border='1'>
                            <tr>
                            <td>Name </td>
                            <td>USN</td>
                            <td>Mark</td>
                            </tr>
                                </table>";
                        while($rows = $resultset->fetch_assoc()){
                            $name=$rows['name'];
                            $mark=$rows['mark'];
                            $usn= $rows['usn'];
                           
                            echo "<table border='1'>
                            <tr>
                            <td>$name </td>
                             <td>$usn</td>
                            <td>$mark</td>
                           
                            </tr>
                                </table>";
                                
                        }
                        
                    }
                    else
                        echo"no found";
                   
                    
                    ?><br/>
                         <input name="submit" value ="Convert to pdf" class="submit" type="submit"/>
       </form>

                </content>

        </div>

    </div>
    <aside class="top-sidebar">
		<article>
		<h2>what is colossus</h2>
		<p>colossus was set of computer developedby british codwbreaker, 
					in 1943-1945 to help in the cryptanalysisof lorintz cipher.</p>
		</article>
	</aside>
	<aside class="middle-sidebar">
		<article>
		<h2>who designed</h2>
		<p>colossus was designed by research telephone engineer Tommy Flowerto solve aproblem post by m athematician Max Newman .</p>
		</article>
	</aside>
	<aside class="bottom-sidebar">
		<article>
		<h2>Programmer</h2>
		<p>My view of colossuswas that of cryptanalyst programmaer.I told the macine to make certain calculation.</p>
		</article>
	</aside>
    <footer class="mainFooter">
        <p>copyright@<a href="#" title="myweb.com">myweb.com</a></p>
    </footer>

</body>
</html>
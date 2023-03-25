<?php
session_start();
$link = mysql_connect("localhos","root");
mysqli_select_db($link,"colossus");
$duration="";
$res=mysqli_query($link,"select * from table1");
while($row=mysqli_fetch_array($res)){
	$duration = $row['duration'];
}
$_SESSION["duration"]=$duration;
$_SESSION["Start_time"]=date("Y-m-d H:i:s");
$end_time=$end_time=date("Y-m-d H:i:s",strtotime('+'.$_SESSION["duration"].'minute',strtotime($_SESSION["start_time"])));
$_SESSION["end_time"]=$end_time;

?>
<script type="text/javascript">
window.location="question.php";

</script>
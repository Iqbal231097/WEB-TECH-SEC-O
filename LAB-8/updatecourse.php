<?php if(!isset($_SESSION)) { session_start(); } ?>

 
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




  <script src = './script.js'></script>
 
</head>
<body>
 
 
<?php include('function.php'); ?>
<?php

if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	        $s=" update  into course (coursename) values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
		echo "<script>alert(' Course has been update succesfully');</script>";
}
?>



<?php include('top.php'); ?>
 
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
 
</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="400px" height="200px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">  Course update</td></tr>
<tr><td class="lefttxt">Course Name</td><td><input type="text" name="t1" required pattern="[a-zA-z _]{3,20}" title"Please Enter Only Characters between 3 to 10 for Category Name" /></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="ADD" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>
<?php  
session_start();//session starts here  
$rid=$_SESSION['rid'];
include("connect.php");
if (!isset($_SESSION['rid'])){
	header('location:index.php');
	exit();
	}
	
$sql = "SELECT RNAME FROM reader WHERE READERID='$rid'";
$result = mysql_query($sql);
$fila = mysql_fetch_row($result);

?>  
    
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">  
    <title>Library Management System By JAP</title>  
</head>  
 <?php
include 'readerheader.php';
?>
<body>  
 
  
<div class="container">  

<div class="jumbotron" style="margin-top:30px;">
    <h1><?php echo "Welcome $fila[0]"; ?></h1>      
    <p>Manage Your Profile Here !</p>
  </div>   
  
 <div class="container" align="center">
 <img src="images/BookAnim.gif".gif">
 </div>  
</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
include 'adminheader.php';
?>
</head>

<body>

<div class="container"style="padding-top:70px;width:500px;">

<form class="form" method="post" action="newreader.php">
  	 <div class="form-group">
    <label for="id">ReaderID</label>
    <input type="number" class="form-control" id="id" name="id">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
  <label for="type">Reader Type</label>
  <select class="form-control" id="type" name="type">
    <option>Student</option>
    <option>Teacher</option>
    <option>Senior Citizen</option>
    <option>Other</option>
  </select>
  </div>
  <div class="form-group">
    <label for="add">Address</label>
    <input type="text" class="form-control" id="addr" name="addr">
  </div>
  <div align="center">
  <button type="submit" class="btn btn-success" name="submit">Add Reader</button>
  </div>
</form>
</div>
</body>
<?php  
  
include("connect.php");  
  
if(isset($_POST['submit']))  
{  
    $id=$_POST['id'];  
    $name=$_POST['name'];  
    $type=$_POST['type'];
    $addr=$_POST['addr']; 
	
   		 $query="INSERT INTO reader(READERID,RTYPE,RNAME,ADDRESS) VALUES('$id', '$type' , '$name' , '$addr')";  

    
   		$result = mysql_query($query)or die(mysql_error());
		
        header('location:newreader.php');
		
		echo "<script language='javascript'>alert('New Record Has Been Added');</script>";
			
	}
?>
<?php
include 'footer.php';
?>


</html>

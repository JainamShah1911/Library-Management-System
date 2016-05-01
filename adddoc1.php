<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
include "adminheader.php";
include("connect.php");
?>
</head>

<style>  

	.row {
		padding:0px;
		 margin-left:auto;
		
		 } 	  
  
</style>  

<body>

<div class="container" style="padding-top:70px;width:500px;">
<div class="row">  
        <div class="col-md-6">  
<form class="form">
  	 <div class="form-group">
    <label for="id">Document ID</label>
    <input type="number" class="form-control" id="id" name="id">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
  <label for="pdate">Publishing Date</label>
 	<input type="date" class="form-control" id="pdate" name="pdate">
  </div>
  <div class="form-group">
    <label for="pid">Publisher ID</label>
    <input type="number" class="form-control" id="pid" name="pid">
  </div>
  <div class="form-group">
    <label for="pname">Publisher Name</label>
    <input type="text" class="form-control" id="pname" name="pname">
  </div>
  <div class="form-group">
    <label for="add">Address</label>
    <input type="text" class="form-control" id="add" name="add">
  </div>
  </div>
  <div class="row">  
        <div class="col-md-6">  
   <div class="form-group">
    <label for="cno">Copy Number</label>
    <input type="number" class="form-control" id="cno" name="cno">
  </div>
   <div class="form-group">
    <label for="libid">Library ID</label>
	<?php
	
		$sql = "SELECT LIBID FROM branch";
		$result = mysql_query($sql);

		echo "<select name='libid' class='form-control'>";
		while ($row = mysql_fetch_array($result)) {
    	echo "<option value='" . $row['LIBID'] ."'>" . $row['LIBID'] ."</option>";
		}
		echo "</select>";
	?>
    
  </div>
     <div class="form-group">
    <label for="pos">Position</label>
    <input type="number" class="form-control" id="pos" name="pos">
  </div>
   <div class="form-group">
    <label for="lname">Branch Name</label>
    <?php
	
		$sql = "SELECT LNAME FROM branch";
		$result = mysql_query($sql);

		echo "<select name='lname' class='form-control'>";
		while ($row = mysql_fetch_array($result)) {
    	echo "<option value='" . $row['LNAME'] ."'>" . $row['LNAME'] ."</option>";
		}
		echo "</select>";
	?>
  </div>
   <div class="form-group">
    <label for="lloc">Location</label>
     <?php
	
		$sql = "SELECT LLOCATION FROM branch";
		$result = mysql_query($sql);

		echo "<select name='lloc' class='form-control'>";
		while ($row = mysql_fetch_array($result)) {
    	echo "<option value='" . $row['LLOCATION'] ."'>" . $row['LLOCATION'] ."</option>";
		}
		echo "</select>";
	?>
  </div>
  </div>
  </div>
	<div align="center">
  <button type="submit" class="btn btn-success">Add Document</button>
  </div>
</form>
</div>
<?php
include 'footer.php';
?>
</head>

<body>
</body>
</html>


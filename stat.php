<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
include "adminheader.php";
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container"style="padding-top:70px;width:500px;>
<form class="form">
  	 <div class="form-group">
		<label for="type">Get Statistics Of:</label>
		  <select class="form-control" id="stat">
			<option>Top 10 most frequent borrowers</option>
			<option>Top 10 most borrowed books in a branch</option>
			<option>The 10 most popular books of the year</option>
			<option>Average fine paid per reader</option>
		  </select>
	 </div>
	 <div align="center">
	<button type="submit" class="btn btn-success">GET</button>
	</div>
</form>
</div>

</body>
<?php
include 'footer.php';
?>
</html>

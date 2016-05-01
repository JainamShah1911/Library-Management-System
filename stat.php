<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
include "adminheader.php";
include("connect.php");
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container"style="padding-top:70px;">
<form class="form" style="width: 500px; margin-left: 300px;">
  	 <div align="center" class="form-group">
		<label for="type">Get Statistics Of:</label>
		  <select class="form-control" id="stat" name="stat" onChange="call()">
		  	<option value="0">------ No Selection ------</option>
			<option value="1">Top 10 Most Frequent Borrowers</option>
			<option value="2">Top 10 Most Borrowed Books In A Branch</option>
			<option value="3">The 10 Most Popular Books Of The Year</option>
			<option value="4">Average Fine Paid Per Reader</option>
		  </select>
		  <script>
								function call() {
									// alert("onChange");
									if (document.getElementById('stat').value == '0') {
										document.getElementById('borrow').style.display = "none";
										document.getElementById('branch').style.display = "none";
										document.getElementById('books').style.display = "none";
										document.getElementById('fine').style.display = "none";
										
									}
									else if (document.getElementById('stat').value == '1') {
										
										document.getElementById('borrow').style.display = "block";
										document.getElementById('branch').style.display = "none";
										document.getElementById('books').style.display = "none";
										document.getElementById('fine').style.display = "none";	
									}
									else if (document.getElementById('stat').value == '2') {
										
										document.getElementById('branch').style.display = "block";
										document.getElementById('borrow').style.display = "none";
										document.getElementById('books').style.display = "none";
										document.getElementById('fine').style.display = "none";	
									}
									else if (document.getElementById('stat').value == '3') {
										
										document.getElementById('books').style.display = "block";
										document.getElementById('branch').style.display = "none";
										document.getElementById('borrow').style.display = "none";
										document.getElementById('fine').style.display = "none";	
									}
									else if (document.getElementById('stat').value == '4') {
										
										document.getElementById('fine').style.display = "block";
										document.getElementById('branch').style.display = "none";
										document.getElementById('books').style.display = "none";
										document.getElementById('borrow').style.display = "none";	
									
									}
									
								}
							</script>
</form>
</div>

							<?php include "freqborrow.php";?>
							<?php include "mostborrow.php";?>
							<?php include "popbooks.php";?>
							<?php include "avgfine.php";?>
							
							

</body>
<?php
include 'footer.php';
?>
</html>

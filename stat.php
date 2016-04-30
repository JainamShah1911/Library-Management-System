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
<div class="container"style="padding-top:70px;width:500px;">
<form class="form">
  	 <div class="form-group">
		<label for="type">Get Statistics Of:</label>
		  <select class="form-control" id="stat" name="stat" onChange="call()">
		  	<option value="0">------No Selection------</option>
			<option value="1">Top 10 most frequent borrowers</option>
			<option value="2">Top 10 most borrowed books in a branch</option>
			<option value="3">The 10 most popular books of the year</option>
			<option value="4">Average fine paid per reader</option>
		  </select>
		  <script>
								function call() {
									// alert("onChange");
									if (document.getElementById('stat').value == 'no_selection') {
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
							
							<div id="borrow" style="display:none;">
							<span>hello world</span>
							</div>
							<div id="branch" style="display:none;">
							<span>option 2</span>
							</div>
							<div id="books" style="display:none;">
							<span>option 3</span>
							</div>
							<div id="fine" style="display:none;">
							<span>option4</span>
							</div>
	
</form>
</div>

</body>
<?php
include 'footer.php';
?>
</html>

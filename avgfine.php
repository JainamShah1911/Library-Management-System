<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8"/>
<title>Untitled Document</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<?php

  
session_start();//session starts here  
$rid=$_SESSION['rid'];
?>
<body>
<div id="fine" class="container" style="padding-top:70px;display:none;">
<table class="table table-striped">
  <thead>
    <tr>
      <th>Reader ID</th>
      <th>Reader Name</th>
      <th>Average Fine</th>
      
	</tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      
	
    </tr>
    </tbody>
</table>
</div>

</body>
<?php
include 'footer.php';
?>
</html>

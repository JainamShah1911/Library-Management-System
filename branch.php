<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8"/>
<title>Untitled Document</title>
<?php
include "adminheader.php";
?>
<link href="css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

<div class="container" style="padding-top:70px;">
<table class="table table-striped">
  <thead>
    <tr>
      <th>Branch Name</th>
      <th>Location</th>
    </tr>
  </thead>
  <tbody style="overflow:auto; height:20px;">
   <?php include("connect.php"); 
    $user_query=mysql_query("select LNAME,LLOCATION from branch")or die(mysql_error());
	while($row=mysql_fetch_array($user_query)){
	?>
    <tr>
      <td><?php echo $row['LNAME']; ?></td>
      <td><?php echo $row['LLOCATION']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

</body>
<?php
include 'footer.php';
?>
</html>

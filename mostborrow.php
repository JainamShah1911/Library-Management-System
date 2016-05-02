<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8"/>
<title>Untitled Document</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div id="branch" class="container" style="padding-top:70px;display:none;">
<table class="table table-striped">
  <thead>
    <tr>
      <th>Document ID</th>
      <th>Document Name</th>
      <th>Copy Number</th>
	  <th>Branch Name</th>
	</tr>
  </thead>
  <tbody>
    <tr>
	<?php  
    $user_query=mysql_query("SELECT b.DOCID,TITLE,COPYNO,LNAME,COUNT(*) AS TOTAL FROM borrows b,document d,branch c WHERE d.DOCID=b.DOCID AND b.LIBID=c.LIBID GROUP BY DOCID ORDER BY DOCID DESC LIMIT 10;")or die(mysql_error());
	while($row=mysql_fetch_array($user_query)){
	?>
    
      <td><?php echo $row['DOCID']; ?></td>
      <td><?php echo $row['TITLE']; ?></td>
      <td><?php echo $row['COPYNO']; ?></td>
      <td><?php echo $row['LNAME']; ?></td>
	  
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

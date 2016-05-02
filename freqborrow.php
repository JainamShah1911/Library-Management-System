<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8"/>
<title>Untitled Document</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div id="borrow" class="container" style="padding-top:70px;display:none;">
<table class="table table-striped">
  <thead>
    <tr>
      <th>Reader ID</th>
      <th>Reader Name</th>
      <th>Document Name</th>
      <th>Copy Number</th>
	  <th>Branch Name</th>
	</tr>
	<?php  
    $user_query=mysql_query("SELECT b.READERID,r.RNAME,d.TITLE,b.COPYNO,c.LNAME,LLOCATION,COUNT(*) AS TOTAL FROM borrows b,document d,branch c,reader r WHERE d.DOCID=b.DOCID AND b.LIBID=c.LIBID GROUP BY READERID ORDER BY TOTAL DESC LIMIT 10;")or die(mysql_error());
	while($row=mysql_fetch_array($user_query)){
	?>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['READERID']; ?></td>
      <td><?php echo $row['RNAME']; ?></td>
      <td><?php echo $row['TITLE']; ?></td>
      <td><?php echo $row['COPYNO']; ?></td>
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

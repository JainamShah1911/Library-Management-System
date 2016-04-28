<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8"/>
<title>Untitled Document</title>
<?php
include "readerheader.php";
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container" style="padding-top:70px;">
<table class="table table-striped">
  <thead>
    <tr>
      <th>Check Me</th>
      <th>Book Title</th>
      <th>Publisher Name</th>
      <th>Author</th>
	  <th>Borrow Date</th>
	  <th>Return Date</th>
	  <th>Fine &#9786 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="checkbox" /></th>
      <td></td>
      <td></td>
      <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
    </tr>
    
  </tbody>
</table>
</div>
<div align="center">
<button type="submit" class="btn btn-success">Return Selected</button>

</div>
</body>
<?php
include 'footer.php';
?>
</html>

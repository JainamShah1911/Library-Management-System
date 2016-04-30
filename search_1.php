<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
include "readerheader.php";
?>
</head>

<body>

<div class="container"style="padding-top:70px;width:500px;>
<form class="form">
  	 <div class="form-group">
    <label for="id">ID</label>
    <input type="number" class="form-control" id="id" name="id">
  </div>
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="publishername">Publisher Name</label>
    <input type="text" class="form-control" id="publishername" name="publishername">
  </div>
  <button type="submit" class="btn btn-default">Search</button>
</form>
</div>
<?php
include 'footer.php';
?>
</body>
</html>

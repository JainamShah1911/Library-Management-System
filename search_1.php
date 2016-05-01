<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
include "readerheader.php";
include("connect.php");
?>
</head>

<body>

<div class="container"style="padding-top:70px;width:500px;">
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
  <?php
  						if(isset($_REQUEST['submit'])){
  						$id = $_POST["id"];
						$title = $_POST["title"];
						$pu = $_POST["title"];
						
						if($city=="0" && $bld_grp=="any")
						{
							$q = mysql_query("SELECT name,gender,dob,bld_grp,address,m_phn,email FROM project.users") or die(mysql_error());
						}
						else if($city=="0" && $bld_grp!="any")
						{
							$q = mysql_query("SELECT name,gender,dob,bld_grp,address,m_phn,email FROM project.users WHERE bld_grp='$bld_grp'") or die(mysql_error());
						}
						else if($city!="0" && $bld_grp=="any")
						{
							$q = mysql_query("SELECT name,gender,dob,bld_grp,address,m_phn,email FROM project.users WHERE city=$city ") or die(mysql_error());
						}
						else if($city!="0" && $bld_grp!="any")
						{
							$q = mysql_query("SELECT name,gender,dob,bld_grp,address,m_phn,email FROM project.users WHERE bld_grp='$bld_grp' AND city=$city ") or die(mysql_error());
						}
						
						while($user = mysql_fetch_array($q))
						{
							print "<tr><td>".$user['name']."</td>";
							print "<td>".$user['gender']."</td>";
							print "<td>".$user['dob']."</td>";
							print "<td>".$user['bld_grp']."</td>";
							print "<td><textarea rows='3' cols='20' disabled>".$user['address']."</textarea></td>";
							print "<td>".$user['m_phn']."</td>";
							print "<td>".$user['email']."</td></tr>";
						}
					?>
				</table>
			</div>
</form>
</div>
<?php
include 'footer.php';
?>
</body>
</html>

 
<?php
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "library";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);
  // $conn = mysql_connect('localhost', 'mysql_user', 'mysql_password');
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $selected = mysqli_select_db($conn, $dbname);
// mysql_select_db('library',mysql_connect('localhost','root',''))or die(mysql_error());
?>
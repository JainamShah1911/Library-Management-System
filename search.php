<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Home</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
  include "readerheader.php";
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // $conn = mysql_connect('localhost', 'mysql_user', 'mysql_password');
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $selected = mysqli_select_db($conn,"library");
  // or die("Could not select libr");

  $searchQuery = "SELECT * from document d  where";

?>
</head>

<body>
      
      <div class="container">
        <div class="row">
          <div class="">
            <?php if (!empty($_POST)): 
                      if (!empty($_POST["id"])) {
                        $searchQuery = $searchQuery." d.DOCID = '".($_POST["id"])."'";
                      }
                      
                      /*if (!empty($_POST["title"])) {
                        $searchQuery = $searchQuery." d.TITLE = ''";
                      }

                      if (!empty($_POST["publishername"])) {
                        $searchQuery = $searchQuery." d.PUBLISHERID = ''";
                      }*/
                      //echo $searchQuery;
                      $result = $conn->query($searchQuery);
                      if ($result->num_rows > 0) {
                          echo "<table><tr><th>ID</th><th>Name</th></tr>";
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo "<tr><td>".$row["DOCID"]."</td><td>".$row["TITLE"]." ".$row["PDATE"]."</td></tr>";
                          }
                        echo "</table>";
                      } else {
                          echo "0 results";
                      }
            ?>


               <!--  Welcome, <?php echo htmlspecialchars($_POST["id"]); ?>!<br>
                Your email is <?php echo htmlspecialchars($_POST["title"]); ?>.<br> -->
            <?php else: ?>
                <form class="form" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                  
                  <div class="form-group">
                    <label for="Name">ID</label>
                    <input type="number" class="form-control" id="id" name="id">
                  </div>
                  
                  <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  
                  <div class="form-group">
                    <label for="Title">Publisher Name</label>
                    <input type="text" class="form-control" id="publishername" name="publishername">
                  </div>

                  <button type="submit" class="btn btn-default">Search</button>
                </form>
            <?php endif; ?>

          </div>

        </div>
      </div>
<?php
include 'footer.php';
?>
</body>
</html>

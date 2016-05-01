
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

  $searchQuery = "SELECT * from document d,branch b,copy c where d.DOCID = c.DOCID AND c.LIBID = b.LIBID AND";

?>
</head>

<body>
      
      <div class="container">
        <div class="row">
          <div class="">
            <?php if (!empty($_POST)):
					
					/* if (!empty($_POST["publishername"]) && ($_POST["title"])){
                     $searchQuery = $searchQuery." d.PUBLISHERID = (SELECT PUBLISHERID FROM publisher WHERE PUBNAME='".$_POST["publishername"]."') AND  d.TITLE = '".($_POST["title"])."'";
                      }*/	
							
                     if (!empty($_POST["id"])) {
                        $searchQuery = $searchQuery." d.DOCID = ".($_POST["id"])."";
                      }
                      
                      if (!empty($_POST["title"])) {
                        $searchQuery = $searchQuery." d.TITLE = '".($_POST["title"])."'";
                      }

                      if (!empty($_POST["publishername"])) {
                        $searchQuery = $searchQuery." d.PUBLISHERID = (SELECT PUBLISHERID FROM publisher WHERE PUBNAME='".$_POST["publishername"]."')";
                      }
					 
                      //echo $searchQuery;
					  ?>
					  
					    <div class="container" style="padding-top:70px;">
						<table class="table table-striped">
						
						  <thead>
							<tr>
								<th>Check Me</th>
							  <th>Document ID</th>
							  <th>Title</th>
							  <th>Publishing Date</th>
							  <th>Branch Name</th>
							  <th>Position</th>
							
							</tr>
						  </thead>
						  <tbody>
							
					  
					  <?php
					  
                      $result = $conn->query($searchQuery);
                      if ($result->num_rows > 0) {
					   while($row = $result->fetch_assoc()) {
					   ?>
					   
							<tr>
							<td scope="row"><input id="check" type="checkbox" /></th>
							  <td><?php echo $row['DOCID']; ?></td>
							  <td><?php echo $row['TITLE']; ?></td>
							  <td><?php echo $row['PDATE']; ?></td>
						      <td><?php echo $row['LNAME']; ?></td>
							  <td><?php echo $row['POSITION']; ?></td>
							  
							  
							  
							</tr>
							
				<?php } ?>
                 			</tbody>
							</table>
							</div>
							<div align="center">
								<button type="submit" class="btn btn-success">Check Out</button>

							   
				<?php }else { ?>
				<div class="container" style="padding-top:70px;">
						<table class="table table-striped">
						 <thead>
							
							  <tr>
							  <td> No Results </td>
							  </tr>
							  
				 <?php } ?>
				 				</thead>
							  </table>
							  </div>
							  


              <?php else: ?>
           	<div class="form-group" style="padding-top:70px; margin-left:350px; width:400px;">
                <form class="form" method="post">
                
				<label for="type">Document Type</label>
			  		<select class="form-control" id="stat" name="stat" onChange="call()">
					<option value="0">------ No Selection ------</option>
					<option value="1">Document ID</option>
					<option value="2">Document Title</option>
					<option value="3">Publisher Name</option>
					
				</select>  
				 <script>
								function call() {
									// alert("onChange");
									if (document.getElementById('stat').value == '0') {
										document.getElementById('id').style.display = "none";
										document.getElementById('title').style.display = "none";
										document.getElementById('publishername').style.display = "none";
										
										
									}
									else if (document.getElementById('stat').value == '1') {
										
										document.getElementById('id').style.display = "block";
										document.getElementById('title').style.display = "none";
										document.getElementById('publishername').style.display = "none";
									}
									else if (document.getElementById('stat').value == '2') {
										
										document.getElementById('id').style.display = "none";
										document.getElementById('title').style.display = "block";
										document.getElementById('publishername').style.display = "none";
									}
									else if (document.getElementById('stat').value == '3') {
										
										document.getElementById('id').style.display = "none";
										document.getElementById('title').style.display = "none";
										document.getElementById('publishername').style.display = "block";
									}
									
								}
							</script>
				
				<div class="form-group" id="id" style="padding-top:70px;display:none;">
                    <label for="Name">ID</label>
                    <input type="number" class="form-control" id="id" name="id">
                  </div>
                  
                  <div class="form-group" id="title"  style="padding-top:70px;display:none;">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  
                  <div class="form-group" id="publishername" style="padding-top:70px;display:none;">
                    <label for="Title">Publisher Name</label>
                    <input type="text" class="form-control" id="publishername" name="publishername">
                  </div>
					<div align="center">
                  <button style="margin-top:50px;" type="submit" class="btn btn-success">Search</button>
                </div>
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

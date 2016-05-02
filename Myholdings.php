<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8"/>
<title>Untitled Document</title>
<?php
include "readerheader.php";
  
session_start();//session starts here  
$rid=$_SESSION['rid'];
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php 
include("connect.php"); 


   
		
	//$result = mysql_query("SELECT DATEDIFF((SELECT RDTIME FROM borrows WHERE BORNUMBER='$bor'), (SELECT BDTIME FROM borrows WHERE BORNUMBER='$bor')) AS days");
		//if (!$result) {
			//			echo 'Could not run query: ' . mysql_error();
				//		exit;
					//  }
		//	$days = mysql_fetch_row($result);
			//$_SESSION['days']=$days;
			//echo $_SESSION['days'];
			//echo $_SESSION['days'][0];
			//CalculateFine();

	
	
		
		 function CalculateFine($bor){
		  		$rid=$_SESSION['rid'];
				 
		 
		  //$user_query=mysql_query("select RDTIME,BORNUMBER from borrows WHERE READERID='$rid'")or die(mysql_error());
	
			//while($row=mysql_fetch_array($user_query)){
		
				//$bor = $row['BORNUMBER'];
				//echo "<br>".$bor;
				//echo "<br>SELECT DATEDIFF((SELECT RDTIME FROM borrows WHERE BORNUMBER='$bor'), (SELECT BDTIME FROM borrows WHERE BORNUMBER='$bor')) AS days";
		 		$result = mysql_query("SELECT DATEDIFF(NOW(),(SELECT RDTIME FROM borrows WHERE BORNUMBER='$bor')) AS days");
				
				$days = mysql_fetch_row($result);
				echo "$"." ".$days[0]*10;
				//while($row=mysql_fetch_array($result)){
					//	print_r ($row[]);
				//}
		// }
		 }		 	
			
			
			//$fine = $_SESSION['days'][0] * 10;
			//echo "$"." ".$fine;
			
			
			
 			/*$dueDate = new DateTime($_SESSION['aid']);
 			$now = date("y-m-d H:i:s");
	 		$lateinterval = strtotime($now) - strtotime($_SESSION['aid']);
			
 			$fine = $lateinterval > 0 ? intval(floor($lateinterval)) * 1 : 0;
 			echo $fine;*/ 
			
	

 ?>
 
<div class="container" style="padding-top:70px;">
<table align="center" class="table table-striped">
  <thead>
    <tr>
      <th>Check Me</th>
      <th>Book Title</th>
      <th>Publisher Name</th>
      <th>Author</th>
	  <th>Borrow Date And Time</th>
	  <th>Return Date</th>
	  <th>Fine &#9786 </th>
    </tr>
  </thead>
  <?php  
    $user_query=mysql_query("select BORNUMBER,TITLE,PUBNAME,BDTIME,RDTIME from document,borrows,publisher WHERE document.DOCID=borrows.DOCID AND document.PUBLISHERID=publisher.PUBLISHERID AND bOrrows.READERID='$rid'")or die(mysql_error());
	while($row=mysql_fetch_array($user_query)){
	?>
  <tbody>
    <tr>
      <th scope="row"><input id="check" name="check" type="checkbox" /></th>
      <td><?php echo $row['TITLE']; ?></td>
      <td><?php echo $row['PUBNAME']; ?></td>
      <td><?php echo $row['TITLE']; ?></td>
	  <td><?php echo $row['BDTIME']; ?></td>
	  <td><?php echo $row['RDTIME']; ?></td>
	  <td><?php CalculateFine($row['BORNUMBER']); ?></td>
    </tr>
	<?php } ?>
    
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

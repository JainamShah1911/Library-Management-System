<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	

	<!-- Including the Header Files and DB connector -->
	<?php
		include "adminheader.php";
		// include("connect.php");
	?>
</head>

<style>  
	.row {
	padding:0px;
	margin-left:auto;
	} 	  
  
</style>  

	<body style='margin-top:10px;margin-bottom: 70px'>
<!-- style="margin:4px; padding:20px" -->
		<div class="container">
			<div class="row">
				<div class="" style="width: 500px;">
					<form class="form" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
						
						<!-- Common Fields -->
						<div class="form-group" id="docTypeDiv">
		                    <label for="docTypeLabel">Document Type</label>
		                    <select class="form-control" id="docType" name="docType" onChange="call()">
		                    	<option value="no_selection">--Select--</option>
				              	<option value="book">Book</option>
				              	<option value="journal">Journal</option>
				              	<option value="proceedings">Proceedings</option>
				            </select>

				            <script>
								function call() {
									// alert("onChange");
									if (document.getElementById('docType').value == 'no_selection') {
										document.getElementById('commonDiv').style.display = "none";
										document.getElementById('bookDiv').style.display = "none";
										document.getElementById('journalDiv').style.display = "none";
										document.getElementById('proceedingDiv').style.display = "none";
										document.getElementById('submitDiv').style.display = "none";
										document.getElementById('successDiv').style.display = "none";
									}else if (document.getElementById('docType').value == 'book') {
										document.getElementById('commonDiv').style.display = "block";
										document.getElementById('bookDiv').style.display = "block";
										document.getElementById('submitDiv').style.display = "block";
										document.getElementById('journalDiv').style.display = "none";
										document.getElementById('proceedingDiv').style.display = "none";
										document.getElementById('successDiv').style.display = "none";
									}else if(document.getElementById('docType').value == 'proceedings') {
										document.getElementById('commonDiv').style.display = "block";
										document.getElementById('proceedingDiv').style.display = "block";
										document.getElementById('submitDiv').style.display = "block";
										document.getElementById('journalDiv').style.display = "none";
										document.getElementById('bookDiv').style.display = "none";
										document.getElementById('successDiv').style.display = "none";
									}else if(document.getElementById('docType').value == 'journal') {
										document.getElementById('commonDiv').style.display = "block";
										document.getElementById('journalDiv').style.display = "block";
										document.getElementById('submitDiv').style.display = "block";
										document.getElementById('bookDiv').style.display = "none";
										document.getElementById('proceedingDiv').style.display = "none";
										document.getElementById('successDiv').style.display = "none";
									}
									
									
								}
							</script>
                  		</div>

                  		<!-- Book Related Fields -->
						<div id="commonDiv" style="display: none;">
							<div class="form-group" id = "titleDiv" >
								<label for="docNameLabel">Title</label>
								<input type="text" class="form-control" id="title" name="title"></input>
							</div>

							<div class="form-group" id = "pDateDiv" >
								<label for="pDateLabel">Published Date</label>
								<input type="date" class="form-control" id="pDate" name="pDate"></input>
							</div>

							<div class="form-group" id = "pNameDiv" >
								<label for="pNameLabel">Publisher Name</label>
								<select class="form-control" id="publisherName" name="publisherName">
								<option>--Select--</option>
								<?php 
								include("connect.php");
								$pubNameQuery = "SELECT DISTINCT PUBNAME FROM publisher order by PUBNAME";
								// echo "<script language='javascript'>alert(".$pubNameQuery.");</script>";
								$result = $conn->query($pubNameQuery);
								if ($result->num_rows > 0) {
								// echo "<table><tr><th>ID</th><th>Name</th></tr>";
								// output data of each row
								/*while($row = $result->fetch_assoc()) {
								$pubname = $row["PUBNAME"];
								echo "<option value=".$pubname.">".$pubname."</option>";
								}*/
								while($row = $result->fetch_assoc()) {
								echo "<option value = '{$row['PUBNAME']}'";
								/*if ($selected_venue_id == $row['PUBNAME'])
								echo "selected = 'selected'";*/
								echo ">{$row['PUBNAME']}</option>";
								}
								}
								?>
								</select>
							</div>

							<div class="form-group">
								<label for="libraryNameLbl">Library Name</label>
								<select class="form-control" id="libraryName" name="libraryName">Library
									<option value="none">--Select--</option>
									<?php
										$libNameSql = "SELECT DISTINCT LNAME FROM BRANCH ORDER BY LNAME";
										$result 	= $conn->query($libNameSql);
										if ($result->num_rows>0) {
											while ($row = $result->fetch_assoc()) {
												echo "<option value = '{$row['LNAME']}'";
												/*if ($selected_venue_id == $row['PUBNAME'])
												echo "selected = 'selected'";*/
												echo ">{$row['LNAME']}</option>";
											}
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="positionLbl">Stack Position</label>
								<input type="text" class="form-control" id="position" name="position"/>
							</div>
						</div>
                  		
                  		<div id="bookDiv" style="display: block;">
		              		<div class="form-group" id = "isbnDiv">
		              			<label for="isbnLabel">ISBN</label>
		              			<input type="number" class="form-control" id="isbn" name="isbn"/>
		              		</div>

		              		<div class="form-group" id = "authorDiv">
		              			<label for="authorLabel">Author</label>
		              			<select class="form-control" id="authorName" name="authorName">
			                    	<option value="none">--Select--</option>
			                    	<?php 
			                    		include("connect.php");
			                    		$authorNameQuery = "SELECT DISTINCT ANAME FROM author order by ANAME";
			                    		$result = $conn->query($authorNameQuery);
			                    		if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												echo "<option value = '{$row['ANAME']}'";
												echo ">{$row['ANAME']}</option>";
											}
										}
					              	?>
					            </select>
		              		</div>

                  		</div>

                  		<!-- Journal Related Form Fields -->
                  		<div id="journalDiv" style="display: none;">
                  			<div class="form-group" id = "journalVolDiv">
			          			<label for="journalVolLabel">Journal Volume</label>
			          			<input type="number" class="form-control" id="jVolume" name="jVolume" min="1" max="5"/>
                  			</div>

                  			<div class="form-group">
                  				<label for="editorNameLbl">Editor Name</label>
                  				<select class="form-control" id="editorName" name="editorName">
                  					<option value="none">--Select--</option>
                  					<?php
                  						include("connect.php");
                  						$editorNameSql = "SELECT DISTINCT ENAME FROM CHIEF_EDITOR ORDER BY ENAME";
                  						$result = $conn->query($editorNameSql);
                  						if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												echo "<option value = '{$row['ENAME']}'";
												echo ">{$row['ENAME']}</option>";
											}
										}
                  					?>
                  				</select>
                  			</div>

                  			<div class="form-group">
		              			<label for="issueNumLbl">Issue Number</label>
		              			<input type="number" class="form-control" id="issueNum" name="issueNum" min="1" max="5"/>
		              		</div>

		              		<div class="form-group">
		              			<label for="scopeLbl">Scope</label>
		              			<input type="text" class="form-control" id="scope" name="scope"/>
		              		</div>

		              		<div class="form-group">
		              			<label for="guestEditorLbl">Guest Editor</label>
		              			<input type="text" class="form-control" id="iename" name="iename"/>
		              		</div>

                  		</div>

                  		<!-- Proceedings related form fields -->
                  		<div id="proceedingDiv" style="display: none;">
                  			<div class="form-group">
                  				<label for="cdateLabel">Conference Date</label>
                  				<input type="date" class="form-control" id="cdate" name="cdate" />
                  			</div>

                  			<div class="form-group">
                  				<label for="cLocLabel">Conference Location</label>
                  				<input type="text" class="form-control" id="cLocation" name="cLocation" />
                  			</div>

                  			<div class="form-group">
                  				<label for="cEdiLabel">Editor</label>
                  				<input type="text" class="form-control" id="cEditor" name="cEditor" />
                  			</div>
                  		</div>
                  		<!-- Form Submit Button -->
                  		<div align="center" id = "submitDiv" style="display: none;">
			            	<button type="submit" class="btn btn-success" name="submit">Add Document</button>
			        	</div>
					</form>

					<?php    
						if(!empty($_POST))  
						{  
							$docType 		= $_POST['docType'];
							$title 			= $_POST['title'];  
							$pDate 			= $_POST['pDate'];  
							$publisherName 	= $_POST['publisherName'];
							$isbn 			= $_POST['isbn'];
							$author 		= $_POST['authorName'];
							$conferenceDt	= $_POST['cdate'];
							$conferenceLoc	= $_POST['cLocation'];
							$editor 		= $_POST['cEditor'];
							$lname 			= $_POST['libraryName'];
							$position 		= $_POST['position'];
							$jVolume 		= $_POST['jVolume'];
							$editorName 	= $_POST['editorName'];
							$issueNumber 	= $_POST['issueNum'];
							$scope 			= $_POST['scope'];
							$guestEditor 	= $_POST['iename'];

							$pubIdQuery 	= "SELECT PUBLISHERID FROM PUBLISHER WHERE PUBNAME ='".$publisherName."';";
							$authorIDQuery 	= "SELECT AUTHORID FROM AUTHOR WHERE ANAME ='".$author."';";
							$libIdQuery		= "SELECT LIBID FROM BRANCH WHERE LNAME = '".$lname."';";
							echo $pubIdQuery;
							// echo "<script language='javascript'>alert(".$pubIdQuery.");</script>";
							// echo "<script language='javascript'>alert('".$pubIdQuery."');</script>";
							$pubIdResult 	= $conn->query($pubIdQuery);
							if ($pubIdResult->num_rows > 0) {
								$pubId = $pubIdResult->fetch_assoc();
							}

							$autIdResult 	= $conn->query($authorIDQuery);
							if ($autIdResult->num_rows > 0) {
								$autId = $autIdResult->fetch_assoc();
							}

							/* Fetching Library ID */	
							$libIdResult 	= $conn->query($libIdQuery);
							if ($libIdResult->num_rows) {
								$libId = $libIdResult->fetch_assoc();
							}

							$sql = "SELECT DOCID FROM DOCUMENT WHERE TITLE = '".$title."' and PDATE = '".$pDate."' and PUBLISHERID = ".$pubId['PUBLISHERID'].";";
							echo "<br>".$sql;
							$result = $conn->query($sql);
							if ($result->num_rows>0) {
								$docID 	= $result->fetch_assoc();
								$sql 	= "SELECT COPYNO FROM COPY WHERE DOCID = ".$docID['DOCID']." AND LIBID = ".$libId['LIBID']." ORDER BY COPYNO DESC;";
								echo "<br>".$sql;
								$result = $conn->query($sql);
								$copyNo = 1;
								if ($result->num_rows>0) {
									$copyNo = $result->fetch_assoc();
									$copyNo = $copyNo['COPYNO'] + 1;
									echo "Copy Number ".$copyNo;
								}

								echo "Copy Number ".$copyNo;
								$sql = "INSERT INTO COPY VALUES (".$docID['DOCID'].", ".$copyNo.", ".$libId['LIBID'].",'".$position."')";
								echo "<br>".$sql;
								$conn->query($sql);
								if (!$conn->commit()) {
									echo '<div id="successDiv" style="background-color:#DAF799">Error while inserting document</div>';
								}else{
									echo '<div id="successDiv" style="background-color:#DAF799">Document successfully added</div>';
								}
							}else{

								$sql = "INSERT INTO document(DOCID,TITLE,PDATE,PUBLISHERID) VALUES(NULL,'".$title."' , '".$pDate."' , '".$pubId['PUBLISHERID']."');"; 

								// echo "<br>";
								// echo $sql; 
								// echo "<br>";
								// echo "ISBN ".$isbn.", Author: ".$author;
								// echo "<br>";
								// echo $bookQuery; 
								// echo "<script type='text/javascript'>alert(".$docQuery.");</script>";
								// $conn->autocommit(FALSE); 
								// echo "Inserting query";
								// echo '<script language="javascript">';
								// echo 'alert("message successfully sent")';
								// echo '</script>';
								$conn->query($sql);
								if ($docType == 'book') {
									$sql = "INSERT INTO book(DOCID,ISBN) VALUES ($conn->insert_id,".$isbn.");";
									$sql.= "INSERT INTO writes(AUTHORID, DOCID) VALUES (".$autId['AUTHORID'].",$conn->insert_id);"; 
								}elseif ($docType == 'proceedings') {
									$sql = "INSERT INTO proceedings(DOCID, CDATE, CLOCATION, CEDITOR) VALUES ($conn->insert_id,'".$conferenceDt."','".$conferenceLoc."','".$editor."');";
								}elseif ($docType == 'journal') {
									$sql = "INSERT INTO journal_volume VALUES ($conn->insert_id,".$jVolume.",(SELECT EDITOR_ID FROM CHIEF_EDITOR WHERE ENAME ='".$editorName."'));";
									$sql.= "INSERT INTO journal_issue VALUES ($conn->insert_id,".$issueNumber.", '".$scope."');";
									$sql.= "INSERT INTO INV_EDITOR VALUES ($conn->insert_id,".$issueNumber.",'".$guestEditor."');";
								}
								echo $sql;
								// $conn->query($sql);
								if (!$conn->multi_query($sql)) {
										echo "Multi query failed: (" . $conn->errno . ") " . $conn->error;
								}else{
									echo '<div id="successDiv" style="background-color:#DAF799">Document successfully added</div>';
								}
							}
							// if (!$conn->commit()) {

							// 	echo "<br>";
							// 	echo "Information cannot be saved";
								// echo "<script language='javascript'>alert('Information cannot be saved');</script>";
							// } else{
								// echo "<br>";
								// printf("Last inserted record has id %d\n", mysql_insert_id());
								// $id = mysql_insert_id();
								// echo $id;
								// $id = mysql_insert_id();
								// echo $id;
								// echo "<br>";
								// echo "Information saved successfully";
								// echo "<script language='javascript'>alert('New Record Has Been Added');</script>";
							// }
							// $result = mysql_query($query)or die(mysql_error());
							// header('location:newreader.php');
						}
					?>
				</div>
			</div>
		</div>	

	<!-- Adding Footer -->
	<?php
	include 'footer.php';
	?>

	</body>
</html>

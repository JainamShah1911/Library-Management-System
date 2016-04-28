<?php  
session_start();//session starts here   
?>  
  
  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">  
    <title>Library Management System By JAP</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;
		}
	.row {
		margin-left:190px;
		margin-top:-100px;
		 } 	  
  
</style>  
  
<body>  
 
  
<div class="container">  

<div class="jumbotron">
    <h1>Library Management System</h1>      
    <p>Knowledge is Wealth !</p>
  </div>     
</div>

    <div class="row">  
        <div class="col-md-5">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Reader</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="index.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Card Number" name="id" type="number" autofocus>  
                            </div>  
                            <div class="form-group" style="height:35px"  >  
                                     <span></span>    
							</div> 
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>
		<div class="col-md-5">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Administrator</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="index.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Admin ID" name="aid" type="number" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="adminlogin" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> --> 
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  
  
include("connect.php");  
  
if(isset($_POST['login']))  
{  
    $rid=$_POST['id'];  
 
  
    $query="select * from reader WHERE READERID='$rid'";  

    
   		$result = mysql_query($query)or die(mysql_error());
		$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {
        header('location:search.php');
			$_SESSION['rid']=$row['rid'];
			}
		else{ 
			echo "<script language='javascript'>alert('Wrong Reader ID');</script>";
			}
	}
	if(isset($_POST['adminlogin']))  
	{  
    $aid=$_POST['aid'];
	$pass=$_POST['pass'];
	   
		if( $aid=='123' && $pass=='admin') {
        header('location:newreader.php');
			$_SESSION['aid']=$row['aid'];
			}
		else{
				echo "<script language='javascript'>alert('Wrong Admin ID or Password');</script>";
			}
	}
?>

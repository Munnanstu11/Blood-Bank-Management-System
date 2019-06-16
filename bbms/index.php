<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<STYLE>A {text-decoration: none;} </STYLE>
</head>
<!--<body style="background-color: gray;">-->
<div id="full">
	<div id="inner-full">
		
		<div id="header"><h2 align="center">Blood Bank Management System</h2></div>
		<div id="body">
			<br><br><br><br><br>
			<form action="" method="post">
			<table align="center">
				<tr>
					<td width="200px" height="70px"><b>Enter Username</b></td>
					<td width="200px" height="70px"><input type="text" name="un" placeholder="Username.."> </td>
				</tr>
				<tr>
					<td width="200px" height="70px"><b>Enter password</b></td>
					<td width="200px" height="70px"><input type="password" name="ps" placeholder="password.."> </td>
				</tr>
				<tr>
					<td><input type="submit" name="sub" value="login"></td>
				</tr>
				
			</table>
			</form>
		<?php

		if(isset($_POST['sub']))
		{
			 $un=$_POST['un'];
			 $ps=$_POST['ps'];
			 $q=$db->prepare("select *from admin where uname='$un' && pass='$ps'");
			 $q->execute();
			 $res=$q->fetchAll(PDO::FETCH_OBJ);
			 if($res)
			 {
			 	
			 	$_SESSION['un']=$un;
			 	header("location:admin.php");
			 }
			 else
			 {
			 	echo"<script>alert('wrong user')</script>";
			 }
		}

        



        ?>
        
	
</div>	

</body>

<?php
	include 'footer.php';
?>

</html>

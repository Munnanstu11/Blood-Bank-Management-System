<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	
	<STYLE>A {text-decoration: none;} </STYLE>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
	<div id="inner-full">
		
		<div id="header"><h2 align="center"><a href="admin.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2></div>
		<div id="body">
			<br>
			<?php
            $un=$_SESSION['un'];
            if(!$un)
            {
            	header("Location:index.php");
            }

			?>
			<h1>Welcome admin</h1><br><br>
			<center><ul>
				<a href="donor-reg.php"><li>Donor Registration</li></a>
				<a href="donor-list.php"><li>Donor List</li></a>
				<a href="Stock-blood-list.php"><li>Stock Blood List</li></a>
			</ul><br><br><br><br><br>
			<ul>
				<!--
				<li><a href="out-stock-blood-list.php">Out Stock Blood</a></li>
				<li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
				-->
				<a href="ngo-list.php"><li>NGO List</li></a>
				<a href="bloodlist/Apositive.php"><li>All Blood Information</li></a>
			</ul></center>
			
        </div>  
	</div>
	<?php include 'footer.php' ?>
</div>	

</body>
</html>

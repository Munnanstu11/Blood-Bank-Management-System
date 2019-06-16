<?php
include('../connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>All blood information</title>
	<link rel="stylesheet" type="text/css" href="../css/s1.css">
	<STYLE>A {text-decoration: none;} </STYLE>
</head>
<h1 style="text-align: center;"><a href="../admin.php" style="text-decoration: none;color: green;">Blood Information</a></h1><hr>
<body style="border: solid 2px black; margin-top: 10px; background-color: #F3EDEC;">
	<div id="full">
		<div id="inner-full">
			<h3>Please select your blood group to know the blood informations:</h3><hr>
			<form action="" method="post">
							<select name="bgroup">
								<option></option>
								<option>A+</option>
								<option>B+</option>
								<option>O+</option>
								<option>AB+</option>
								<option>A-</option>
								<option>B-</option>
								<option>O-</option>
								<option>AB-</option>
							</select>
							<input type="submit" name="sub" value="Search your blood" ></td>
			</form>
			
			
        <?php
        	$blname='';
         if (isset($_POST['sub'])) {
        	 $blname=$_POST['bgroup'];
        	 if ($_POST['bgroup']=='') {
        	 	echo '<h3 style="background-color:red; color:white;">&nbsp;Please select any of the blood group</h3>';
        	 }
        	}

         ?>
         <hr>

			<h2>Information about: <?=$blname;?> blood group</h2>
										<?php 
												$q=$db->query("SELECT *FROM donor_registration  WHERE bgroup='$blname' "); 
												$row=$q->rowcount();
												if ($row<1) {
							    						echo '<h4 style="color:red;">'.$blname. ' blood is limited </h4>';
							    					}
							    					else{
							    						echo '<h4 style="color:green;">We have only '.$row.' bags of '.$blname. 'blood</h4>';
							    					}
							    					echo'<br>';
											?>
											<h4 style="margin-top: -20px;">Available <?=$blname;?> blood donor information .......</h4>
											<table style="width: 100%; text-align: center; height: auto; margin-top: -10px;">
													<tr style="border: 1px solid black;">
														<td ><b>Name</b><hr></td>
														<td><b>Mobile No</b><hr></td>
														<td><b>Address</b><hr></td>
													</tr>

											<?php
							    					$q1=$db->query("SELECT *FROM donor_registration WHERE bgroup='$blname' ORDER BY name");

												foreach ($q1 as $r2) 
												{

													echo '<tr>
							                       <td> '.$r2["name"].'<hr> </td>
							                       <td> '.$r2["mno"].'<hr> </td>
							                       <td> '.$r2["address"].'<hr></td>	                       
							                    </tr>';
							                    echo '<br>';

												} 


											?>
											</table>
											<br>
									
		
		</div>
		<div id="footer">
	<h4 align="center" style="color: white;">&copy; All rights reserved by Monir Uz Zaman Munna</h4>
     <p align="center">
     	<a href="../logout.php">
     		<font color="white" ><button style="background-color:  #ee5c3d;">&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;</button></font>
        </a>
     </p>
</div>
		 <br>
	</div>
</body>
</html>
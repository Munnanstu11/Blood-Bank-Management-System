<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<STYLE>A {text-decoration: none;} </STYLE>
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
			<h1>Donor Registration</h1><br><br>
			<center><div id="form">
				<form action="" method="post" target="donor-list.php">
				<table>
					<tr>
						<td width="200px" height="50px">Name:</td>
						<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
						<td width="200px" height="50px">Age:</td>
						<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter age"></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Address:</td>
						<td width="200px" height="50px"><input type="text" name="address" placeholder="Enter address"></td>
						<td width="200px" height="50px">City:</td>
						<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter city"></td>
					</tr>
					<tr>
						<td width="200px" height="50px">E-mail:</td>
						<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
						<td width="200px" height="50px">Mobile No:</td>
						<td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter mobile no"></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Blood Group:</td>
						<td width="200px" height="50px">
							<select name="bgroup" style="color: green;">
								<option>A+</option>
								<option>B+</option>
								<option>O+</option>
								<option>AB+</option>
								<option>A-</option>
								<option>B-</option>
								<option>O-</option>
								<option>AB-</option>
							</select>
						</td>	
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="sub" value="save" ></td>
					</tr>
				</table>

			   </form>
			   <br>
			   <a href="donor-list.php"><button type="button" style="background-color: green; color: white; padding: 15px; border-radius: 25%; ">Check your saving data</button></a>


			   <?php
			   $bgroup='';
			   $name='';
			   $age='';
			   $address='';
			   $city='';
			   $email='';
			   $mno='';

			   if(isset($_POST['sub']))
			   {
			   	   $name=$_POST['name'];
			   	   $age=$_POST['age'];
			   	    $address=$_POST['address'];
			   	   $city=$_POST['city'];
			   	   $email=$_POST['email'];
			   	   $mno=$_POST['mno'];
			   	   $bgroup=$_POST['bgroup'];
			   	    if($_POST['name']!='' && $_POST['age']!='' && $_POST['address']!='' && $_POST['city']!='' && $_POST['email']!='' && $_POST['mno']!='' && $_POST['bgroup']!='')
			   	    {

					   	   $q=$db->prepare("INSERT INTO donor_registration(name,age,address,city,email,mno,bgroup) VALUES(:name,:age,:address,:city,:email,:mno,:bgroup)");
					   	   $q->bindvalue('name',$name);
					   	   $q->bindvalue('age',$age);
					   	   $q->bindvalue('address',$address);
					   	   $q->bindvalue('city',$city);
					   	   $q->bindvalue('email',$email);
					   	   $q->bindvalue('mno',$mno);
					   	   $q->bindvalue('bgroup',$bgroup);
					   	   $q->execute();
					   	   echo '<br> <p style="background-color:#DCDDDE; color:green; font-size:25px;">&#9745; You have successfully done all the works.. congratulations !!<p>';
					   	   /*if($q->execute())
					   	   {
					   	   	echo "<script>alert('donor registration successful')</script>";
					   	   }
					   	   else
					   	   {
					   	   	echo "<script>alert('donor registration fail')</script>";
					   	   }*/

			   		}
			  		 else{
			   			echo '<br> <p style="background-color:#DCDDDE; color:red; font-size:25px;">&#9940; You may forget to fill up the any of them, please insert all the data<p>';
			   			}
			} 
         
               
                ?>	
			</div></center>
			
        </div>
	</div>
	<br>
	<br>
	<?php include'footer.php'; ?>	
</div>	

</body>



</html>
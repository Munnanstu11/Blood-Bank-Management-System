<?php
include('connection.php');

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Donor List</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width:200px;
		    height:20px;
		}
	</style>
	<STYLE>A {text-decoration: none;} </STYLE>
</head>
<body>
<div id="full">
	<div id="inner-full">
		
	<div id="header">
		<h2 align="center"><a href="admin.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2>
	</div>
			<div id="body">
				<br>
					<?php
		            $un=$_SESSION['un'];
		            if(!$un)
		            {
		            	header("Location:index.php");
		            }

					?>
				<a href="donor-reg.php"><button type="button" style="background-color: green; color: white; padding: 15px; border-radius: 25%; ">Want again fill the form?</button></a><h1>Donor List</h1>
		
		<center>

				<div id="form" style="width: 100%; height: auto;">
						<style>
							table {
		  							border-collapse: collapse;
									}
							table, td {
		 							 border: 1px solid black;
									}

						</style>

					<table style="width: 100%; text-align: center; height: auto;">
						<tr style="border: 1px solid black;">
							<td ><center><b>Name</b></center></td>
							<td><center><b>Age</b></center></td>
							<td><center><b>Address</b></center></td>
							<td><center><b>City</b></center></td>
							<td><center><b>Email</b></center></td>
							<td><center><b>Mobile No</b></center></td>
							<td><center><b>Blood Group</b></center></td>
						</tr>


                   <!--
										
								
								<?php
										//$sql = "SELECCT * FROM donor_registration";
										
		 
										//$q = $db->query($sql);
										//$q = $db->prepare($sql);
   										//$q->execute();
										//$q->setFetchMode(PDO::FETCH_ASSOC);


								?>	
											 
										<?php //while ($r = $q->setFetchMode(PDO::FETCH_ASSOC) ): ?>
											
										
						                     <tr>
						                     	<td><?php// echo $r['name'];?></td>

						                       <td><center><?php// echo $r["name"];?></center></td>
						          
						         
						                    </tr>
						                 <?php //endwhile; ?> 
						             -->
						             

						                      
						                      
								
                      <!--
							<?php

								//$sql = "SELECT * FROM donor_registration";
	   							$retval// = mysqli_query($db,$sql);	
	           				?>
		           			<?php //while($r1=mysqli_fetch_assoc($retval)) : ?>
		                <tr>
		                       <td> <center> <?php //echo $r1['name'];?> </center></td>
		                       <td> <center> <?php //echo $r1['age'];?> </center></td>
		                       <td> <center> <?php //echo $r1['address'];?> </center></td>
		                       <td> <center> <?php //echo $r1['city'];?> </center></td>
		                       <td> <center> <?php //echo $r1['email'];?> </center></td>
		                       <td> <center> <?php //echo $r1['mno'];?> </center></td>
		                       <td> <center> <?php //echo $r1['bgroup'];?> </center></td>	                       
		                </tr>
		                <?php// endwhile; ?>   
		                -->   
							<?php
		                		$data = $db->query("SELECT * FROM donor_registration")->fetchAll();

								foreach ($data as $r1) 
								{
								    


									echo '<tr>
				                       <td> <center>'.$r1["name"].' </center></td>
				                       <td> <center>'.$r1["age"].' </center></td>
				                       <td> <center>'.$r1["address"].' </center></td>
				                       <td> <center>'.$r1["city"].' </center></td>
				                       <td> <center>'.$r1["email"].' </center></td>
				                       <td> <center>'.$r1["mno"].' </center></td>
				                       <td> <center>'.$r1["bgroup"].' </center></td>	                       
				                    </tr>';
								} 
								

							?>                                            
					</table>

			  

			</div>
		</center>
			
    	</div>
				  
	</div>	
	<?php
		include 'footer.php';
	?>
</div>	
		



        </body>
</html>
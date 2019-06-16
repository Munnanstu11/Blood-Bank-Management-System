<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>All blood information</title>
	<link rel="stylesheet" type="text/css" href="../css/s1.css">
	<STYLE>A {text-decoration: none;} </STYLE>
</head>
<body style="width: 80%; margin-left: 10%;">
		<div id="full">
		<h2 style="text-decoration: none;color: white;background-color: green; height: 50px;  text-align: center;">
			<a href="admin.php" >Blood Bank Management System</a></h2>
		</div>

		<div id="checkblood">
			<h1>All the blood group's informatio</h1><hr>
			<style>
				#checkblood{
					text-align: left;
					margin: 5%;
				}
			</style>
			
			<button><a href="/bbms/bloodlist/Apositive.php">Click Here to know A positive blood information</a></button><br><br>
			<button><a href="/bbms/bloodlist/Apositive.php">Click Here to know A positive blood information</a></button><br><br>
			<button><a href="/bbms/bloodlist/Apositive.php">Click Here to know A positive blood information</a></button><br><br>
			<button><a href="/bbms/bloodlist/Apositive.php">Click Here to know A positive blood information</a></button><br><br>
			<button><a href="/bbms/bloodlist/Apositive.php">Click Here to know A positive blood information</a></button><br><br>
			<button><a href="/bbms/bloodlist/Apositive.php">Click Here to know A positive blood information</a></button><br><br>
			<button><a href="/bbms/bloodlist/Apositive.php">Click Here to know A positive blood information</a></button><br><br>

		</div>
		<style>
			#checkblood button:hover{
				background-color: red;
				height: 30px;
				color: white;
			}
		</style>
</body>
</html>